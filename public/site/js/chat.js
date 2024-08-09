import axios from 'axios';

const messageInput = document.querySelector('.chat_footer-text');
const sendButton = document.querySelector('.chat_footer button');

sendButton.addEventListener('click', async () => {
    const message = messageInput.value.trim();

    if (message) {
        try {
            await axios.post('/send-message', { message });
            messageInput.value = '';
        } catch (error) {
            console.error('Error sending message:', error);
        }
    }
});
