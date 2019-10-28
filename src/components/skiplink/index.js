function hashFocus() {
    window.addEventListener("hashchange", function(event) {

        var element = document.getElementById(location.hash.substring(1));

        if (element) {

            if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
                element.tabIndex = -1;
            }

            element.focus();
        }

    }, false);

}

function parentFocus() {

    var links = document.querySelectorAll(".skiplink");

    links.forEach(function(link) {
        link.addEventListener("focus", function() {
          link.parentElement.classList.add("focus");
        });
        link.addEventListener("blur", function() {
          link.parentElement.classList.remove("focus");
        });
    } )
}

export {hashFocus, parentFocus}
