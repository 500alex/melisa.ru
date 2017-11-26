    window.addEvent('load', function() {
        new JCaption('img.caption');
    });
window.addEvent('domready', function() {
    $$('.hasTip').each(function(el) {
        var title = el.get('title');
        if (title) {
            var parts = title.split('::', 2);
            el.store('tip:title', parts[0]);
            el.store('tip:text', parts[1]);
        }
    });
    var JTooltips = new Tips($$('.hasTip'), {"maxTitleChars": 50,"fixed": false});
});
jQuery.noConflict();