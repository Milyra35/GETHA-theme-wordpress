window.addEventListener('DOMContentLoaded', function() {
    function navigationMenu()
    {
        let menu = document.querySelector('header span > h2');
        let nav = document.querySelector('header span nav');

        menu.addEventListener('click', function() {
            if(nav.style.display === "block")
            {
                nav.style.display = 'none';
            }
            else
            {
                nav.style.display = "block";
            }
        })
    }

    navigationMenu();
})