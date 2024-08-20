@section('footer')



    <div class="footer__row">
        <div class="footer__block">
            <div class="footer__logo">
                <img src="{{ asset('site/assets/images/logo_footer.svg')}}" alt="logo">
            </div>
            <div class="footer__socials">
                <a class="ss__hover" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="#fff" class="ss__svg">
                        <path
                            d="M32 16.0401C32 7.18596 24.832 0 16 0C7.168 0 0 7.18596 0 16.0401C0 23.8035 5.504 30.2677 12.8 31.7594V20.8521H9.6V16.0401H12.8V12.0301C12.8 8.93434 15.312 6.41604 18.4 6.41604H22.4V11.2281H19.2C18.32 11.2281 17.6 11.9499 17.6 12.8321V16.0401H22.4V20.8521H17.6V32C25.68 31.198 32 24.3649 32 16.0401Z">
                        </path>
                    </svg>
                </a>
                <a class="ss__hover" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="#fff" class="ss__svg">
                        <path
                            d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM11.3506 24.1875H7.45386V12.4641H11.3506V24.1875ZM9.40234 10.8633H9.37695C8.06934 10.8633 7.22363 9.96313 7.22363 8.83813C7.22363 7.68774 8.09521 6.8125 9.42822 6.8125C10.7612 6.8125 11.5815 7.68774 11.6069 8.83813C11.6069 9.96313 10.7612 10.8633 9.40234 10.8633ZM25.4014 24.1875H21.5051V17.9158C21.5051 16.3396 20.9409 15.2646 19.531 15.2646C18.4546 15.2646 17.8135 15.9897 17.5317 16.6897C17.4287 16.9402 17.4036 17.2903 17.4036 17.6406V24.1875H13.5071C13.5071 24.1875 13.5581 13.564 13.5071 12.4641H17.4036V14.124C17.9214 13.3252 18.8479 12.189 20.9153 12.189C23.479 12.189 25.4014 13.8645 25.4014 17.4653V24.1875Z">
                        </path>
                    </svg>
                </a>
                <a class="ss__hover" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="#fff" class="ss__svg">
                        <path
                            d="M16.004 0H15.996C7.174 0 0 7.176 0 16C0 19.5 1.128 22.744 3.046 25.378L1.052 31.322L7.202 29.356C9.732 31.032 12.75 32 16.004 32C24.826 32 32 24.822 32 16C32 7.178 24.826 0 16.004 0ZM25.314 22.594C24.928 23.684 23.396 24.588 22.174 24.852C21.338 25.03 20.246 25.172 16.57 23.648C11.868 21.7 8.84 16.922 8.604 16.612C8.378 16.302 6.704 14.082 6.704 11.786C6.704 9.49 7.87 8.372 8.34 7.892C8.726 7.498 9.364 7.318 9.976 7.318C10.174 7.318 10.352 7.328 10.512 7.336C10.982 7.356 11.218 7.384 11.528 8.126C11.914 9.056 12.854 11.352 12.966 11.588C13.08 11.824 13.194 12.144 13.034 12.454C12.884 12.774 12.752 12.916 12.516 13.188C12.28 13.46 12.056 13.668 11.82 13.96C11.604 14.214 11.36 14.486 11.632 14.956C11.904 15.416 12.844 16.95 14.228 18.182C16.014 19.772 17.462 20.28 17.98 20.496C18.366 20.656 18.826 20.618 19.108 20.318C19.466 19.932 19.908 19.292 20.358 18.662C20.678 18.21 21.082 18.154 21.506 18.314C21.938 18.464 24.224 19.594 24.694 19.828C25.164 20.064 25.474 20.176 25.588 20.374C25.7 20.572 25.7 21.502 25.314 22.594Z">
                        </path>
                    </svg>
                </a>
                <a class="ss__hover" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="#fff" class="ss__svg">
                        <path
                            d="M31.0478 19.3773C33.3628 8.97567 24.2492 -0.473698 13.5465 1.34026C7.73631 -2.26502 0 1.80907 0 8.72129C0 10.3288 0.443559 11.8338 1.21479 13.131C-0.936402 23.5566 8.25179 32.8701 18.9452 30.9323C26.5043 34.9291 34.8573 26.9581 31.0478 19.3773ZM20.8739 25.6502C18.066 26.8049 13.4453 26.8116 10.6494 25.3479C6.66271 23.2223 5.95408 18.437 9.39333 18.437C11.9854 18.437 11.1649 21.459 13.7823 22.6909C14.9838 23.2463 17.5665 23.3036 19.0677 22.2914C20.5502 21.2991 20.4144 19.7382 19.6085 18.9924C17.4733 17.0213 11.3634 17.8044 8.57014 14.3536C7.35668 12.8566 7.12758 10.2156 8.61943 8.30043C11.2195 4.95486 18.8493 4.75109 22.13 7.27758C25.159 9.62161 24.3411 12.7328 21.8969 12.7328C18.9571 12.7328 20.5023 8.88644 15.7563 8.88644C12.3158 8.88644 10.9624 11.333 13.3854 12.5237C16.6701 14.1552 25.0404 13.6105 25.0404 19.986C25.0338 22.639 23.4074 24.6167 20.8739 25.6502Z">
                        </path>
                    </svg>
                </a>
                <a class="ss__hover" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="#fff" class="ss__svg">
                        <path
                            d="M16 0C7.16 0 0 7.34598 0 16.406C0 23.656 4.584 29.8041 10.94 31.9717C11.74 32.1261 12.0333 31.6183 12.0333 31.1828C12.0333 30.7933 12.02 29.761 12.0133 28.3933C7.56267 29.3825 6.624 26.1923 6.624 26.1923C5.896 24.2988 4.844 23.7923 4.844 23.7923C3.39467 22.7753 4.956 22.7962 4.956 22.7962C6.56267 22.9103 7.40667 24.4866 7.40667 24.4866C8.83333 26.9951 11.152 26.2702 12.0667 25.8514C12.2107 24.7899 12.6227 24.0678 13.08 23.6574C9.52667 23.247 5.792 21.8362 5.792 15.5504C5.792 13.7598 6.412 12.2962 7.43867 11.1484C7.25867 10.7338 6.71867 9.0656 7.57867 6.80616C7.57867 6.80616 8.91867 6.36651 11.9787 8.48822C13.2587 8.1237 14.6187 7.94284 15.9787 7.93449C17.3387 7.94284 18.6987 8.1237 19.9787 8.48822C23.0187 6.36651 24.3587 6.80616 24.3587 6.80616C25.2187 9.0656 24.6787 10.7338 24.5187 11.1484C25.5387 12.2962 26.1587 13.7598 26.1587 15.5504C26.1587 21.8529 22.4187 23.24 18.8587 23.6435C19.4187 24.136 19.9387 25.1419 19.9387 26.6793C19.9387 28.8747 19.9187 30.6389 19.9187 31.1717C19.9187 31.6016 20.1987 32.115 21.0187 31.9508C27.42 29.7971 32 23.6449 32 16.406C32 7.34598 24.836 0 16 0Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer__block">
            <div class="footer__title">Services</div>

            <ul class="footer__list">
                <li><a href="">Game Development Outsourcing</a></li>
                <li><a href="">Mobile Application Development</a></li>
                <li><a href="">VR App Development</a></li>
                <li><a href="">Dedicated Developers</a></li>
                <li><a href="">SDK Development</a></li>
                <li><a href="">3D Modeling services</a></li>
            </ul>
        </div>
        <div class="footer__block">
            <div class="footer__title">Technologies</div>
            <ul class="footer__list">
                <li><a href="">Android</a></li>
                <li><a href="">IOS</a></li>
                <li><a href="">Unity</a></li>
            </ul>
        </div>
        <div class="footer__block">
            <div class="footer__title">
                <a href="">Products</a>
            </div>
            <div class="footer__title">
                <a href="">Portfolio</a>
            </div>
            <div class="footer__title">
                <a href="">Blog</a>
            </div>
        </div>
        <div class="footer__block">
            <div class="footer__title">About Us</div>
            <ul class="footer__list">
                <li><a href="">Contacts</a></li>
                <li><a href="">Team</a></li>
                <li><a href="">Join the Team</a></li>
            </ul>
        </div>
    </div>


<div class="footer__line">
    <div class="footer__line__row">
        <div class="footer__line__left">
            <div class="copy">© 2021 - Stan’s Assets. All Right Reserved</div>
        </div>
        <div class="footer__line__right">
            <div class="links">
                <a href="{{ route('politics/1')}}">Privacy policy</a>
                <a href="">Cookies policy</a>
            </div>
        </div>
    </div>
</div>
@endsection
