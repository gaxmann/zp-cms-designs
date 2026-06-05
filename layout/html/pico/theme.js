(function() {
	var key='theme';
	var root=document.documentElement;
	var button=document.getElementById('theme-toggle');

	function current_theme() {
		var theme=root.getAttribute('data-theme');
		if (theme=='dark' || theme=='light') return theme;
		if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) return 'dark';
		return 'light';
	}

	function set_button() {
		if (!button) return;
		var theme=current_theme();
		button.innerHTML=(theme=='dark') ? '🌙' : '☀️';
		button.title=(theme=='dark') ? 'Dunkles Farbschema aktiv' : 'Helles Farbschema aktiv';
		button.setAttribute('aria-label', button.title);
	}

	function set_theme(theme) {
		if (theme) root.setAttribute('data-theme', theme);
		else root.removeAttribute('data-theme');
		set_button();
	}

	try { set_theme(localStorage.getItem(key)); }
	catch(e) { set_button(); }

	if (window.matchMedia) {
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function() {
			try {
				if (!localStorage.getItem(key)) set_button();
			}
			catch(e) {
				set_button();
			}
		});
	}

	if (button) button.onclick=function() {
		var next=(current_theme()=='dark') ? 'light' : 'dark';
		set_theme(next);
		try { localStorage.setItem(key, next); }
		catch(e) { }
	};
})();
