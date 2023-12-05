JS:

document.getElementById('generalUserBtn').addEventListener('click', function() {
    // Handle click for General User button
    window.location.href = 'user-register.html';
    alert('You clicked General User');
});

document.getElementById('employeeBtn').addEventListener('click', function() {
    window.location.href = 'employee-register.html';
    alert('You clicked Employee');
});