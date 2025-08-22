<section id="contact" class="p-5">
    <h1>Contact</h1>
    <hr class="hr-title">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum fugiat, necessitatibus sed dolor reiciendis id cumque, in esse libero adipisci nulla! Cumque accusamus eius ipsum harum amet? Maxime fuga exercitationem magnam harum obcaecati earum nisi nam. Quos doloremque perferendis dolore!</p>
    <div class="d-flex gap-3">
        <div class="p-3 d-flex flex-column gap-3 box-location" style="width: 40%">
            <div class="d-flex gap-2 align-items-center">
                <div class="bulle-contact">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="rgba(52, 136, 255, 1)" viewBox="0 0 24 24" >
                    <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M12 2c-4.41 0-8 3.59-8 8-.03 6.44 7.12 11.6 7.42 11.82.17.12.38.19.58.19s.41-.06.58-.19c.3-.22 7.45-5.37 7.42-11.82 0-4.41-3.59-8-8-8m0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4"></path>
                    </svg>
                </div>
                <div>
                    <b>Location :</b>
                    <p class="m-0">{{ $contact->street }} {{ $contact->number }}, {{ $contact->zip }} {{ $contact->city }}</p>
                </div>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <div class="bulle-contact">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="rgba(52, 136, 255, 1)" viewBox="0 0 24 24" >
                    <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M20 4H4c-1.1 0-2 .9-2 2v.25l10 7.5 10-7.5V6c0-1.1-.9-2-2-2"></path><path d="M12 16c-.21 0-.42-.07-.6-.2L2 8.75V18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8.75l-9.4 7.05c-.18.13-.39.2-.6.2"></path>
                </svg>
            </div>
            <div>
                <b>Email :</b>
                <p class="m-0">{{ $contact->email }}</p>
            </div>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <div class="bulle-contact">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="rgba(52, 136, 255, 1)" viewBox="0 0 24 24" >
                    <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M18.41 22h.37c.31-.01.6-.17.78-.43l2.27-3.27c.15-.22.21-.49.16-.76a1 1 0 0 0-.43-.65l-4.91-3.27c-.41-.27-.96-.21-1.29.15l-1.88 2.03c-.76-.45-2.03-1.26-3.03-2.26s-1.81-2.27-2.26-3.02l2.03-1.88c.36-.33.43-.88.15-1.29L7.1 2.44c-.15-.22-.38-.38-.64-.43-.27-.05-.54 0-.76.16L2.43 4.43c-.26.18-.42.47-.43.78-.03.71-.16 7.04 4.79 11.98 4.46 4.46 10.04 4.8 11.62 4.8Z"></path>
                    </svg>
                </div>    
                        <div>
                <b>Call :</b>
                <p class="m-0">{{ $contact->phone }}</p>
                        </div>
            </div>
        <iframe style="height: 300px; width: 100%;" src="https://www.google.com/maps?q={{ $map }}&output=embed" frameborder="0"></iframe>
        </div>
        <div class="box-message">

        </div>
    </div>
</section>