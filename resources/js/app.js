import './bootstrap';
var audio = new Audio("../../assets/sounds/tone.mp3");


//for the notifications
Echo.private(`App.Models.User.`+window.userID)
    .notification((notification) => {
    if(notification['notification_type'] == 'NewRegister'){
        audio.play();
        setTimeout(function() {
            //update the number of notification on the screen
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
        }, 4000);

    } else if (notification['notification_type'] == 'NewVolunteer'){
        audio.play();
        setTimeout(function() {
            //update the number of notification on the screen
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
        }, 4000);
    } 
});