// JavaScript functionalities for the admin dashboard

// Sample code for different functionalities
document.addEventListener("DOMContentLoaded", function () {
    // Functionality to handle navigation clicks
    const links = document.querySelectorAll('.navigation a');
    const mainContent = document.querySelector('.main');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            // Clear active class from all links
            links.forEach(l => l.classList.remove('active'));
            // Add active class to the clicked link
            this.classList.add('active');

            // Placeholder content for different functionalities based on clicked link
            mainContent.innerHTML = `<h2>${this.textContent}</h2>`;
        });
    });

    // Functionality to send message to all users
    const sendMessageLink = document.querySelector('.navigation a[href="#"]');
    sendMessageLink.addEventListener('click', function (e) {
        e.preventDefault();
        // Placeholder action to send a message to all users
        const confirmation = confirm('Are you sure you want to send a message to all users?');
        if (confirmation) {
            alert('Message sent to all users!');
        }
    });
});



// Inside your admin.js file

// Get reference to Data Manager Profile link
const dataManagerLink = document.querySelector('.navigation a[href="#"]'); // Update the href with the appropriate value

// Get reference to the Data Manager Profile content section
const dataManagerContent = document.querySelector('.content-section.data-manager');

// Function to show Data Manager Profile content
function showDataManagerContent() {
    // Hide all content sections
    const allContentSections = document.querySelectorAll('.content-section');
    allContentSections.forEach(section => {
        section.classList.remove('active');
    });

    // Show Data Manager Profile content
    dataManagerContent.classList.add('active');
}

// Event listener to handle click on Data Manager Profile link
dataManagerLink.addEventListener('click', showDataManagerContent);
