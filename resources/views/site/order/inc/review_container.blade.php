<div style="display: none;" class="review_container">
    <div class="review_container-wrapper" id="feedback_container">
        <div class="review_container_header">
            <span class="active" id="sendFeedback">Оставить отзыв</span>
            <span id="sendQuestion">Задать вопрос</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="review_container_header-close" viewBox="0 0 24 24" fill="none">
                <path d="M13.5908 12.0001L18.0439 7.547C18.2553 7.33602 18.3742 7.04974 18.3744 6.75111C18.3747 6.45249 18.2563 6.166 18.0453 5.95465C17.8344 5.74331 17.5481 5.62443 17.2495 5.62416C16.9508 5.6239 16.6643 5.74227 16.453 5.95325L11.9999 10.4064L7.54675 5.95325C7.33541 5.7419 7.04876 5.62317 6.74988 5.62317C6.45099 5.62317 6.16435 5.7419 5.953 5.95325C5.74166 6.16459 5.62292 6.45123 5.62292 6.75012C5.62292 7.04901 5.74166 7.33565 5.953 7.547L10.4061 12.0001L5.953 16.4532C5.74166 16.6646 5.62292 16.9512 5.62292 17.2501C5.62292 17.549 5.74166 17.8357 5.953 18.047C6.16435 18.2583 6.45099 18.3771 6.74988 18.3771C7.04876 18.3771 7.33541 18.2583 7.54675 18.047L11.9999 13.5939L16.453 18.047C16.6643 18.2583 16.951 18.3771 17.2499 18.3771C17.5488 18.3771 17.8354 18.2583 18.0468 18.047C18.2581 17.8357 18.3768 17.549 18.3768 17.2501C18.3768 16.9512 18.2581 16.6646 18.0468 16.4532L13.5908 12.0001Z" fill="#6F6E6E"/>
            </svg>
        </div>

        <div class="review_container_main" >
            <form id="myFormId" action="{{ route('post_rate', [$order->id]) }}" method="POST">
                @csrf
                <div class="review_container_main-rate">
                    Оцените товар
                    <div id="ratePicker">
                        <svg class="rate-star" width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"></path>
                        </svg>
                        <svg class="rate-star" width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"></path>
                        </svg>
                        <svg class="rate-star" width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"></path>
                        </svg>
                        <svg class="rate-star" width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"></path>
                        </svg>
                        <svg class="rate-star" width="24" height="22" viewBox="0 0 24 22" fill="none" stroke="#6F6E6E" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.945 1.82278L14.2654 8.70047L14.3801 9.04064H14.7391H22.1944L16.1793 13.2495L15.8725 13.4642L15.9922 13.819L18.2998 20.659L12.2317 16.4129L11.945 16.2124L11.6584 16.4129L5.59018 20.659L7.89781 13.819L8.01751 13.4642L7.7107 13.2495L1.69565 9.04064H9.1509H9.5099L9.62466 8.70047L11.945 1.82278Z"></path>
                        </svg>
                    </div>
                    <input type="hidden" name="rating" id="rating" value="0">
                </div>

                <div class="review_container_main-comment">
                    Ваш комментарий
                    <textarea name="comment" required></textarea>
                </div>

                <div class="review_container_main-buttons">
                    <a>Отмена</a>
                    <a href="#" id="sendReview" type="submit" class="submit-btn">Оставить отзыв</a>
                </div>
            </form>
        </div>
    </div>

</div>
