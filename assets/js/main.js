
document.addEventListener('DOMContentLoaded', function(){
    // Header indikator --------------------
    const header = document.getElementById('modern_header');
    if (!header) return;
    function updateScrollProgress(){
        const scrollTop = window.scrollY;
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = scrollHeight > 0
            ? (scrollTop / scrollHeight) * 100
            : 100;

        header.style.setProperty(
            '--scroll-progress',
            Math.min(progress, 100) + '%'
        );

    }

    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();

    // Desktop menu ----------------------
    const searchOpen = document.getElementById('searchOpen');
    if( searchOpen ){
        searchOpen.addEventListener('click', function () {
            const iconSss = searchOpen.querySelector('i');
            if (!iconSss) return;

            const search_action_desk = document.getElementById('search_action_desk');
            const header_primary_menu = document.getElementById('header_primary_menu');

            if (searchOpen.classList.contains('open')) {
                searchOpen.classList.remove('open');
                iconSss.classList.replace('fa-xmark', 'fa-magnifying-glass');
                search_action_desk.classList.remove('active');
                header_primary_menu.classList.remove('denone');
            } else {
                searchOpen.classList.add('open');
                iconSss.classList.replace('fa-magnifying-glass', 'fa-xmark');
                search_action_desk.classList.add('active');
                header_primary_menu.classList.add('denone');
            }
        });
    }

    // Flexbox menu js ---------------
    const modernFlexboxMenu = document.getElementById('modern_flexbox_menu');
    if( modernFlexboxMenu ){
        const showFlexbox = document.getElementById('showFlexbox');
        const flexboxClose = document.getElementById('flexboxClose');
        showFlexbox.addEventListener('click', function(){
            modernFlexboxMenu.classList.add('active');
        });

        flexboxClose.addEventListener('click', function(){
            modernFlexboxMenu.classList.remove('active');
        });
    }
});