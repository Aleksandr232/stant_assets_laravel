const messageInput = document.querySelector('.chat_footer-text');
const sendButton = document.querySelector('.chat_footer button');

sendButton.addEventListener('click', async () => {
    const message = messageInput.value.trim();

    if (message) {
        try {
            const response = await fetch('/send-message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ message })
            });

            if (response.ok) {
                messageInput.value = '';
            } else {
                throw new Error('Error sending message');
            }
        } catch (error) {
            console.error('Error sending message:', error);
        }
    }
});
