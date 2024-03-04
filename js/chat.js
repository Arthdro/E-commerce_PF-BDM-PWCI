 // Get the chat bubble and chat box elements
 const chatBubble = document.getElementById('chatBubble');
 const chatBox = document.getElementById('chatBox');

 // Function to toggle the chat box open/close
 function toggleChat() {
 if (chatBox.style.display === 'block') {
     chatBox.style.display = 'none';
 } else {
     chatBox.style.display = 'block';
 }
 }

 // Event listener for clicking on the chat bubble to toggle chat box open/close
 chatBubble.addEventListener('click', toggleChat);