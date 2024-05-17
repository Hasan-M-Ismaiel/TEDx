import './bootstrap';
var audio = new Audio("../../assets/sounds/tone.mp3");


//for the notifications
Echo.private(`App.Models.User.`+window.userID)
    .notification((notification) => {
    if(notification['notification_type'] == 'TaskAssigned'){
        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_task']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            $("#toast-header").addClass("bg-success");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#2ecf56");
            $("#toast_content").addClass("text-white");
            $("#toast_content").html("finish this new task "+notification['task_title']);
            $(".toast").toast('show');
    
            //update the number of notification on the screen
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
    
            $("#headerTasksDropdown").html(window.NumberOfTasksForAllProjects + 1);
            window.NumberOfTasksForAllProjects = window.NumberOfTasksForAllProjects + 1 ;

    
            //update the number of tasks on the screen
            $("#num_of_tasks").html(window.NumberOfTasks + 1);
            window.NumberOfTasks = window.NumberOfTasks + 1 ;
        }, 4000);


    } else if (notification['notification_type'] == 'TaskUnAssigned'){
        audio.play();
        
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_project']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            
            $("#toast-header").addClass("bg-danger");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#eb4141");
            $("#toast_content").addClass("text-white");
    
            $("#toast_content").html("the task "+notification['task_title']+" is unassigned from you ");
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
    
            $("#headerTasksDropdown").html(window.NumberOfTasksForAllProjects - 1);
            window.NumberOfTasksForAllProjects = window.NumberOfTasksForAllProjects - 1 ;

    
            //update the number of tasks on the screen
            $("#num_of_tasks").html(window.NumberOfTasks - 1);
            window.NumberOfTasks = window.NumberOfTasks - 1 ;
        }, 4000);

    } else if (notification['notification_type'] == 'ProjectAssigned'){
        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_project']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
    
            $("#toast-header").addClass("bg-success");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#2ecf56");
            $("#toast_content").addClass("text-white");
    
            $("#toast_content").html("You are now one of team member for this project "+ notification['project_title']);
            $(".toast").toast('show');

            //update the number of notification on the screen
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;

            // alert(window.NumberOfAssignedProjects);
            $("#headerProjectsDropdown").html(window.NumberOfAssignedProjects + 1);
            window.NumberOfAssignedProjects = window.NumberOfAssignedProjects + 1 ;

        }, 5000);


    } else if (notification['notification_type'] == 'ProjectUnAssigned'){
        audio.play();
        setTimeout(function() {
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
    
            $("#toast-header").addClass("bg-danger");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#eb4141");
            $("#toast_content").addClass("text-white");
    
            $("#toast_content").html(" you are now not one of team member for this project "+ notification['project_title']);
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;

            $("#headerProjectsDropdown").html(window.NumberOfAssignedProjects - 1);
            window.NumberOfAssignedProjects = window.NumberOfAssignedProjects - 1 ;

        }, 5000);


    } else if (notification['notification_type'] == 'TaskWaitingNotification'){
        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_task']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);    // add logo image here
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            
            $("#toast-header").addClass("bg-warning");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#f0e552");
            $("#toast_content").addClass("text-white");
            
            $("#toast_content").html("There is a task pending and waiting to be closed from project " + notification['project_title']);
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications +1 ;
        }, 5000);

    } else if (notification['notification_type'] == 'TeamleaderRoleAssigned'){

        audio.play();
        setTimeout(function() {}, 5000);

        $("#toast_link_to_notification_target").attr("href",notification['link_to_project']+'?notificationId='+notification['notification_id']);
        $("#toast_image").attr("src",notification['project_manager_image']);
        $("#toast_project_manager_name").html(notification['project_manager_name']);
       
        $("#toast-header").addClass("bg-success");
        $("#toast-header").addClass("text-white");

        $("#toast_content").css("background-color", "#2ecf56");
        $("#toast_content").addClass("text-white");
        
        $("#toast_content").html("You are now the teamleader of this project "+ notification['project_title']);
        $(".toast").toast('show');

        $("#num_of_notification").html(window.NumberOfNotifications + 1);
        window.NumberOfNotifications = window.NumberOfNotifications +1 ;

    } else if (notification['notification_type'] == 'TeamleaderRoleUnAssigned'){

        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_project']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            
            $("#toast-header").addClass("bg-danger");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#eb4141");
            $("#toast_content").addClass("text-white");
            
            $("#toast_content").html(" you are now not the teamleader of this project "+notification['project_title']);
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications +1 ;
        }, 5000);


    } else if (notification['notification_type'] == 'ProjectDeleted'){

        audio.play();
        setTimeout(function() {
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            
            $("#toast-header").addClass("bg-danger");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#eb4141");
            $("#toast_content").addClass("text-white");
    
            $("#toast_content").html("The project " + notification['project_title']+ " has been deleted");
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
            
            $("#headerProjectsDropdown").html($("#headerProjectsDropdown").val() - 1);
        }, 5000);


    } else if (notification['notification_type'] == 'TaskDeleted'){

        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_task']+'?notificationId='+notification['notification_id']);
            $("#toast_image").attr("src",notification['project_manager_image']);
            $("#toast_project_manager_name").html(notification['project_manager_name']);
            
            $("#toast-header").addClass("bg-danger");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#eb4141");
            $("#toast_content").addClass("text-white");
            
            $("#toast_content").html("this task: " + notification['task_title'] +' has been deleted' +" from this project: " + notification['project_title']);
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
    
            $("#headerTasksDropdown").html($("#headerTasksDropdown").val() - 1);
        }, 5000);


        if(window.NumberOfTasks > 0){
            //update the number of tasks on the screen
            $("#num_of_tasks").html(window.NumberOfTasks - 1);
            window.NumberOfTasks = window.NumberOfTasks - 1 ;
        }else{
            //update the number of tasks on the screen
            $("#num_of_tasks").html(window.NumberOfTasks);
            window.NumberOfTasks = window.NumberOfTasks ;
        }
    } else if (notification['notification_type'] == 'TaskMissed'){
        audio.play();
        setTimeout(function() {
            $("#toast_link_to_notification_target").attr("href",notification['link_to_task']+'?notificationId='+notification['notification_id']);
            $("#toast_image").hide();   // add logo image here 
            $("#toast_project_manager_name").hide();
            
            $("#toast-header").addClass("bg-warning");
            $("#toast-header").addClass("text-white");
    
            $("#toast_content").css("background-color", "#f0e552");
            $("#toast_content").addClass("text-white");
            
            
            $("#toast_title").html("Task missed");
            $("#toast_content").html('you have missed this task '.notification['task_title'] + 'from project '.notification['project_title']);
            $(".toast").toast('show');
    
            $("#num_of_notification").html(window.NumberOfNotifications + 1);
            window.NumberOfNotifications = window.NumberOfNotifications + 1 ;
    
            //update the number of tasks on the screen
            $("#num_of_tasks").html(window.NumberOfTasks - 1);
            window.NumberOfTasks = window.NumberOfTasks - 1 ;
        }, 5000);
    }
});