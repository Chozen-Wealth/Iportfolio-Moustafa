
<nav class="bg-dark vh-100 d-flex flex-column position-fixed" style="width: 250px; left: 0;">
    <div class="d-flex flex-column align-items-center mt-4 gap-2">
        <img height="100" width="100" class="rounded-circle border" src="{{ asset($about->avatar->image) }}" alt="">
        <h4 class="text-light d-flex align-items-center gap-2">Mode Admin <div class="indicateur-admin"></div></h4>
    </div>
    <hr class="border col-10 mx-auto">
    <div class="d-flex flex-column">
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("index_messages") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="#ffffff" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 2v.51l-8 6.22-8-6.22V6zM4 18V9.04l7.39 5.74c.18.14.4.21.61.21s.43-.07.61-.21L20 9.03v8.96H4Z"></path>
                </svg>
                Messagerie
            </a>
        </div>
        
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("edit_about") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="#ffffff" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5m0-8c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3M4 22h16c.55 0 1-.45 1-1v-1c0-3.86-3.14-7-7-7h-4c-3.86 0-7 3.14-7 7v1c0 .55.45 1 1 1m6-7h4c2.76 0 5 2.24 5 5H5c0-2.76 2.24-5 5-5"></path>
            </svg>
            Edit About
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("edit_contacts") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                fill="currentColor" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M18.07 22h.35c.47-.02.9-.26 1.17-.64l2.14-3.09c.23-.33.32-.74.24-1.14s-.31-.74-.64-.97l-4.64-3.09a1.47 1.47 0 0 0-.83-.25c-.41 0-.81.16-1.1.48l-1.47 1.59c-.69-.43-1.61-1.07-2.36-1.82-.72-.72-1.37-1.64-1.82-2.36l1.59-1.47c.54-.5.64-1.32.23-1.93L7.84 2.67c-.22-.33-.57-.57-.97-.64a1.455 1.455 0 0 0-1.13.24L2.65 4.41c-.39.27-.62.7-.64 1.17-.03.69-.16 6.9 4.68 11.74 4.35 4.35 9.81 4.69 11.38 4.69ZM6.88 10.05c-.16.15-.21.39-.11.59.05.09 1.15 2.24 2.74 3.84 1.6 1.6 3.75 2.7 3.84 2.75.2.1.44.06.59-.11l1.99-2.15 3.86 2.57-1.7 2.46c-1.16 0-6.13-.24-9.99-4.1S4 7.06 4 5.91l2.46-1.7 2.57 3.86-2.15 1.99Z"></path>
                </svg>
                Edit Contacts
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("index_portfolios") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="#ffffff" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M19.5 3h-5c-.83 0-1.5.67-1.5 1.5v15c0 .83.67 1.5 1.5 1.5h5c.83 0 1.5-.67 1.5-1.5v-15c0-.83-.67-1.5-1.5-1.5M19 19h-4V5h4zM4.5 11h5c.83 0 1.5-.67 1.5-1.5v-5c0-.83-.67-1.5-1.5-1.5h-5C3.67 3 3 3.67 3 4.5v5c0 .83.67 1.5 1.5 1.5M5 5h4v4H5zM4.5 21h5c.83 0 1.5-.67 1.5-1.5v-5c0-.83-.67-1.5-1.5-1.5h-5c-.83 0-1.5.67-1.5 1.5v5c0 .83.67 1.5 1.5 1.5m.5-6h4v4H5z"></path>
                </svg>
                Edit Portfolio
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("index_services") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="#ffffff" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M12 2A2 2 0 1 0 12 6 2 2 0 1 0 12 2z"></path><path d="m18,5.35l-3.62,1.61c-.06.03-.13.04-.2.04h-4.36c-.35,0-.69.07-1.02.22l-3.62,1.61c-.72.32-1.19,1.04-1.19,1.83v3.35h2v-3.35l3-1.33v12.68h2v-7h2v7h2v-13.15c.07-.02.13-.04.2-.06l3.62-1.61c.72-.32,1.19-1.04,1.19-1.83v-3.35h-2v3.35Z"></path><path d="M3 16H7V22H3z"></path>
                </svg>
                Edit Services
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("index_skills") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                fill="#ffffff" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M14 2c-.55 0-1 .45-1 1v7c0 .55.45 1 1 1h7c.55 0 1-.45 1-1 0-4.41-3.59-8-8-8m1 7V4.08c2.51.42 4.49 2.41 4.92 4.92z"></path><path d="M10.51 22A8.5 8.5 0 0 0 19 14.06c.02-.28-.08-.55-.27-.75s-.45-.32-.73-.32h-6.99V6a.97.97 0 0 0-.32-.73c-.2-.19-.46-.28-.75-.27-2.06.13-4 1.01-5.45 2.47C2.88 9.08 2 11.22 2 13.49s.89 4.41 2.49 6.02A8.46 8.46 0 0 0 10.51 22M5.91 8.88c.86-.86 1.93-1.45 3.1-1.73v6.83c0 .55.45 1 1 1h6.83a6.4 6.4 0 0 1-1.73 3.1c-1.23 1.23-2.87 1.91-4.6 1.91s-3.37-.68-4.6-1.91S4 15.21 4 13.48s.68-3.38 1.91-4.61Z"></path>
                </svg>
                Edit Skills
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="#">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                fill="rgb(255, 201, 101)" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M11 9h2v6h-2zM11 17h2v2h-2z"></path><path d="M12.87 2.51c-.35-.63-1.4-.63-1.75 0l-9.99 18c-.17.31-.17.69.01.99.18.31.51.49.86.49h20c.35 0 .68-.19.86-.49a1 1 0 0 0 .01-.99zM3.7 20 12 5.06 20.3 20z"></path>
                </svg>
                Testimonials (Maintenance)
            </a>
        </div>
        <div class="itemboxmenu">
            <a class="text-decoration-none text-light d-flex gap-3 align-items-center" href="{{ route("home") }}">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="currentColor" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="M15 11H8v2h7v4l6-5-6-5z"></path><path d="M5 21h7v-2H5V5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2"></path>
                </svg>
                Déconnexion
            </a>
        </div>
    </div>
    <div class="d-flex flex-grow-1 align-items-end">
        <p class="text-light opacity-50 text-center">Copyright - iPortfolio fait par Moustafa El Dehni</p>
    </div>
</nav>