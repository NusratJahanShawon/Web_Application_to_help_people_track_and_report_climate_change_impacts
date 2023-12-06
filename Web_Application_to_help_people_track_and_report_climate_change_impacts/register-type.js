document.getElementById('generalUserBtn').addEventListener('click', function() {
    // Handle click for General User button
    window.location.href = 'user-register.php';
    alert('You clicked General User');
});

document.getElementById('employeeBtn').addEventListener('click', function() {
    window.location.href = 'employee-register.php';
    alert('You clicked Employee');
});