<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home_page.css">

    <?php include("user_info.php"); ?>

    <style>
        
    </style>
    </style>

</head>
<body>
    <div class="navBar">
        <table>
            <tr>
                <td class="profilePic"><a href="#">
                <div class="dropdown">
                    <svg style="margin-top: 3px; margin-right: 3px;" class="input-icon" viewBox="0 0 45.532 45.532" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                    S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                    c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                    c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                    c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path></svg></a>
                    <div class="dropdown-content">
                        <div class="data">
                            <div class="svg-container">
                                <svg height="20px" width="20px" class="input-icon" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000000" d="m80.16 29.054-5.958-.709 5.958.71Zm31.68 0-5.958.71 5.958-.71Zm34.217 19.756-2.365-5.515 2.365 5.514Zm10.081 3.352 5.196-3-5.196 3Zm7.896 13.676 5.196-3-5.196 3Zm-2.137 10.407-3.594-4.805 3.594 4.805Zm0 39.51 3.593-4.805-3.593 4.805Zm2.137 10.407 5.196 3-5.196-3Zm-7.896 13.676-5.196-3 5.196 3Zm-10.081 3.353 2.364-5.515-2.364 5.515Zm-34.217 19.755 5.958.709-5.958-.709Zm-31.68 0-5.958.709 5.958-.709Zm-34.217-19.755-2.364-5.515 2.364 5.515Zm-10.08-3.353-5.197 3 5.196-3Zm-7.897-13.676 5.196-3-5.196 3Zm2.137-10.407 3.594 4.805-3.594-4.805Zm0-39.51L26.51 81.05l3.593-4.805Zm-2.137-10.407 5.196 3-5.196-3Zm7.896-13.676-5.196-3 5.196 3Zm10.081-3.352-2.364 5.514 2.364-5.514Zm7.85 3.365-2.365 5.515 2.364-5.515Zm0 87.65 2.364 5.514-2.365-5.514ZM36.235 111.17l-3.594-4.805 3.594 4.805Zm76.823 41.535 5.958.71-5.958-.71Zm39.854-69.742-3.593-4.805 3.593 4.805Zm-16.369-30.074 2.364 5.514-2.364-5.514Zm-23.485-13.594-5.958.709 5.958-.71ZM88.104 16a14 14 0 0 0-13.902 12.345l11.916 1.419A2 2 0 0 1 88.104 28V16Zm15.792 0H88.104v12h15.792V16Zm13.902 12.345A14 14 0 0 0 103.896 16v12a2 2 0 0 1 1.986 1.764l11.916-1.419Zm1.219 10.24-1.219-10.24-11.916 1.419 1.219 10.24 11.916-1.419Zm24.675 4.71-9.513 4.08 4.729 11.028 9.513-4.08-4.729-11.028Zm17.642 5.867a14 14 0 0 0-17.642-5.867l4.729 11.029a2 2 0 0 1 2.521.838l10.392-6Zm7.896 13.676-7.896-13.676-10.392 6 7.896 13.676 10.392-6Zm-3.74 18.212a14 14 0 0 0 3.74-18.212l-10.392 6a2 2 0 0 1-.535 2.602l7.187 9.61Zm-8.984 6.718 8.984-6.718-7.187-9.61-8.983 6.718 7.186 9.61Zm8.984 23.182-8.984-6.718-7.186 9.61 8.983 6.718 7.187-9.61Zm3.74 18.212a14 14 0 0 0-3.74-18.212l-7.187 9.61a2 2 0 0 1 .535 2.602l10.392 6Zm-7.896 13.676 7.896-13.676-10.392-6-7.896 13.676 10.392 6Zm-17.642 5.867a14 14 0 0 0 17.642-5.867l-10.392-6a2.001 2.001 0 0 1-2.521.838l-4.729 11.029Zm-9.513-4.08 9.513 4.08 4.729-11.029-9.512-4.079-4.73 11.028Zm-16.381 19.03 1.219-10.24-11.916-1.419-1.219 10.24 11.916 1.419ZM103.896 176a14 14 0 0 0 13.902-12.345l-11.916-1.419a2 2 0 0 1-1.986 1.764v12Zm-15.792 0h15.792v-12H88.104v12Zm-13.902-12.345A14 14 0 0 0 88.104 176v-12a2 2 0 0 1-1.986-1.764l-11.916 1.419Zm-1.012-8.504 1.012 8.504 11.916-1.419-1.012-8.504-11.916 1.419ZM51.428 134.31l-7.85 3.366 4.73 11.029 7.849-3.366-4.73-11.029Zm-7.85 3.366a2 2 0 0 1-2.52-.838l-10.392 6a14 14 0 0 0 17.642 5.867l-4.73-11.029Zm-2.52-.838-7.896-13.676-10.392 6 7.896 13.676 10.392-6Zm-7.896-13.676a2 2 0 0 1 .535-2.602l-7.187-9.61a14 14 0 0 0-3.74 18.212l10.392-6Zm.535-2.602 6.132-4.585-7.187-9.61-6.132 4.585 7.187 9.61ZM26.51 81.05l6.132 4.586 7.187-9.61-6.132-4.586-7.187 9.61Zm-3.74-18.212a14 14 0 0 0 3.74 18.212l7.187-9.61a2 2 0 0 1-.535-2.602l-10.392-6Zm7.896-13.676L22.77 62.838l10.392 6 7.896-13.676-10.392-6Zm17.642-5.867a14 14 0 0 0-17.642 5.867l10.392 6a2 2 0 0 1 2.52-.838l4.73-11.029Zm7.849 3.366-7.85-3.366-4.729 11.029 7.85 3.366 4.729-11.029Zm18.045-18.316-1.012 8.504 11.916 1.419 1.012-8.504-11.916-1.419Zm-1.754 27.552c6.078-3.426 11.69-9.502 12.658-17.63L73.19 36.85c-.382 3.209-2.769 6.415-6.635 8.595l5.893 10.453Zm-21.02 1.793c7.284 3.124 15.055 1.57 21.02-1.793l-5.893-10.453c-3.704 2.088-7.481 2.468-10.398 1.217l-4.73 11.029ZM49 96c0-7.1-2.548-15.022-9.171-19.975l-7.187 9.61C35.36 87.668 37 91.438 37 96h12Zm23.448 40.103c-5.965-3.363-13.736-4.917-21.02-1.793l4.729 11.029c2.917-1.251 6.694-.871 10.398 1.218l5.893-10.454Zm-32.62-20.128C46.452 111.022 49 103.1 49 96H37c0 4.563-1.64 8.333-4.358 10.365l7.187 9.61Zm78.679 19.575c-5.536 3.298-10.517 8.982-11.406 16.446l11.916 1.419c.329-2.765 2.318-5.582 5.632-7.557l-6.142-10.308Zm20.402-1.953c-7.094-3.042-14.669-1.463-20.402 1.953l6.142 10.308c3.382-2.015 6.872-2.372 9.53-1.233l4.73-11.028Zm-53.803 20.135c-.968-8.127-6.58-14.202-12.658-17.629l-5.893 10.454c3.866 2.179 6.253 5.385 6.635 8.594l11.916-1.419ZM141 96c0 6.389 2.398 13.414 8.32 17.842l7.186-9.61C154.374 102.638 153 99.668 153 96h-12Zm8.32-17.842C143.398 82.586 141 89.61 141 96h12c0-3.668 1.374-6.638 3.506-8.232l-7.186-9.61ZM118.507 56.45c5.733 3.416 13.308 4.995 20.401 1.953l-4.729-11.029c-2.658 1.14-6.148.782-9.53-1.233l-6.142 10.31Zm-11.406-16.446c.889 7.464 5.87 13.148 11.406 16.446l6.142-10.309c-3.314-1.974-5.303-4.79-5.632-7.556l-11.916 1.419Z"/><path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M96 120c13.255 0 24-10.745 24-24s-10.745-24-24-24-24 10.745-24 24 10.745 24 24 24Z"/></svg>
                            </div>
                            <a href="#">Settings</a>
                        </div>
                        <div class="data">
                            <div class="svg-container">
                                <svg height="20px" width="20px" class="input-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6.5C2 4.01472 4.01472 2 6.5 2H12C14.2091 2 16 3.79086 16 6V7C16 7.55228 15.5523 8 15 8C14.4477 8 14 7.55228 14 7V6C14 4.89543 13.1046 4 12 4H6.5C5.11929 4 4 5.11929 4 6.5V17.5C4 18.8807 5.11929 20 6.5 20H12C13.1046 20 14 19.1046 14 18V17C14 16.4477 14.4477 16 15 16C15.5523 16 16 16.4477 16 17V18C16 20.2091 14.2091 22 12 22H6.5C4.01472 22 2 19.9853 2 17.5V6.5ZM18.2929 8.29289C18.6834 7.90237 19.3166 7.90237 19.7071 8.29289L22.7071 11.2929C23.0976 11.6834 23.0976 12.3166 22.7071 12.7071L19.7071 15.7071C19.3166 16.0976 18.6834 16.0976 18.2929 15.7071C17.9024 15.3166 17.9024 14.6834 18.2929 14.2929L19.5858 13L11 13C10.4477 13 10 12.5523 10 12C10 11.4477 10.4477 11 11 11L19.5858 11L18.2929 9.70711C17.9024 9.31658 17.9024 8.68342 18.2929 8.29289Z"/></svg>
                            </div>
                            <a href="logOut.php">Log out</a>
                        </div>
                    </div>
                </div>
                </td>
                <td><a href="#">home</a></td>
                <td><a href="#">subjects</a></td>
                <td><a href="admin.php"><?php if($role == 'a') echo "admin" ?></a></td>
            </tr>
        </table>
    </div>
    <div class="content">
        <!--Subjects-->
        <div class="subjects-bar">
            <div class="subjects-title">Subjects</div>

            <?php
            
            $subject_result;

            if($role == 's'){
                $sql = "SELECT * 
                FROM subject sub 
                JOIN student_subject stu 
                ON sub.subject_id = stu.subject_id 
                JOIN user u 
                ON stu.user_id = u.user_id 
                WHERE u.user_id = $user_id";
                $subject_result = $conn->query($sql);
            }else if($role == 't'){
                $sql = "SELECT * 
                FROM subject sub 
                JOIN teacher_subject tea 
                ON sub.subject_id = tea.subject_id 
                JOIN user u 
                ON tea.user_id = u.user_id
                WHERE u.user_id = $user_id";
                $subject_result = $conn->query($sql);
            }

            

            if($subject_result->num_rows > 0){

                for($i = 0; $i < $subject_result->num_rows; $i++){

                    $subject_row =  mysqli_fetch_assoc($subject_result);
                    
                    ?>
                    
                    <div class="subject">
                        <div class="subject-content"><a href="subject.php?id='<?php echo urlencode($subject_row['subject_id']) ?>'"><?php echo $subject_row['class_name']; ?></a></div>
                        <div class="subject-icon">
                            <svg width="20px" height="20px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                            <path fill="#553788" d="M15 31c0 2.209-.791 4-3 4H5c-4 0-4-14 0-14h7c2.209 0 3 1.791 3 4v6z"></path>
                            <path fill="#9266CC" d="M34 33h-1V23h1a1 1 0 1 0 0-2H10c-4 0-4 14 0 14h24a1 1 0 1 0 0-2z"></path>
                            <path fill="#CCD6DD" d="M34.172 33H11c-2 0-2-10 0-10h23.172c1.104 0 1.104 10 0 10z"></path>
                            <path fill="#99AAB5" d="M11.5 25h23.35c-.135-1.175-.36-2-.678-2H11c-1.651 0-1.938 6.808-.863 9.188C9.745 29.229 10.199 25 11.5 25z"></path>
                            <path fill="#269" d="M12 8a4 4 0 0 1-4 4H4C0 12 0 1 4 1h4a4 4 0 0 1 4 4v3z"></path>
                            <path fill="#55ACEE" d="M31 10h-1V3h1a1 1 0 1 0 0-2H7C3 1 3 12 7 12h24a1 1 0 1 0 0-2z"></path>
                            <path fill="#CCD6DD" d="M31.172 10H8c-2 0-2-7 0-7h23.172c1.104 0 1.104 7 0 7z"></path>
                            <path fill="#99AAB5" d="M8 5h23.925c-.114-1.125-.364-2-.753-2H8C6.807 3 6.331 5.489 6.562 7.5C6.718 6.142 7.193 5 8 5z"></path>
                            <path fill="#F4900C" d="M20 17a4 4 0 0 1-4 4H6c-4 0-4-9 0-9h10a4 4 0 0 1 4 4v1z"></path>
                            <path fill="#FFAC33" d="M35 19h-1v-5h1a1 1 0 1 0 0-2H15c-4 0-4 9 0 9h20a1 1 0 1 0 0-2z"></path>
                            <path fill="#CCD6DD" d="M35.172 19H16c-2 0-2-5 0-5h19.172c1.104 0 1.104 5 0 5z"></path>
                            <path fill="#99AAB5" d="M16 16h19.984c-.065-1.062-.334-2-.812-2H16c-1.274 0-1.733 2.027-1.383 3.5c.198-.839.657-1.5 1.383-1.5z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <?php


                }

            }
            
            ?>

            
        </div>

        <!--Assignmets-->
        <div class="assignments">
        <?php 
        
        if($role == 's'){
            $sql = "SELECT * 
            FROM asignment asi 
            JOIN subject sub ON asi.subject_id = sub.subject_id 
            JOIN student_subject stu ON sub.subject_id = stu.subject_id 
            JOIN user u ON stu.user_id = u.user_id 
            WHERE u.user_id = $user_id;";
            $result = $conn->query($sql);
        }else if($role == 't'){
            $sql = "SELECT * 
            FROM asignment asi 
            JOIN subject sub ON asi.subject_id = sub.subject_id 
            JOIN teacher_subject tea ON sub.subject_id = tea.subject_id 
            JOIN user u ON tea.user_id = u.user_id 
            WHERE u.user_id = $user_id;";
            $result = $conn->query($sql);
        }
        
        if($result->num_rows > 0){
            

            for($i = 0; $i < $result->num_rows; $i++){
                $row = mysqli_fetch_assoc($result);
                $class_id = $row['subject_id'];
                $assignment_id = $row['asignment_id'];
                
                $sql = "SELECT class_name FROM subject WHERE subject_id='$class_id'";
                $result2 = $conn->query($sql);
                $class_name = mysqli_fetch_assoc($result2);
                ?>
                
                    <div class="assignment-preview">
                        <div class="title"> <?php echo $row['title']; ?> </div>
                        <div class="assignment-subject"><p><?php echo $class_name['class_name']; ?></p></div>
                        <div class="description"><b>Description: </b><?php echo $row['description']; ?></div>
                        <a href="assignment.php?id='<?php echo urlencode($assignment_id); ?>'" class="action-button">View Assignment</a>
                    </div>
                
            <?php

            }
        }

        ?>
        </div>
        
        <!--Notes-->
        <div class="sidebar">
            <div class="title">
                <p>Notes</p>
            </div>
            <?php 
            
            $sql = "SELECT * FROM reminders WHERE user_id='$user_id'";
            $notes_result = $conn->query($sql);

            if($notes_result->num_rows > 0){

                for($i = 0; $i < $notes_result->num_rows; $i++){

                    $notes_row = mysqli_fetch_assoc($notes_result);
                    $forwarding_id = $notes_row['reminder_id'];

                    ?>
                        <div class="note">
                            <div class="note-content"><?php echo $notes_row['content'] ?></div>
                            <div class="delete-icon">
                                <a href="deleteReminder.php?id=<?php echo urlencode($forwarding_id); ?>">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12V17" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 12V17" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4 7H20" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php

                }
                
            }else{
                ?>
                    <div class="note">
                        <div class="empty-notes">
                            <p>You have no notes</p>
                        </div>
                    </div>
                <?php
            }

            ?>
        <!-- More notes can be added dynamically here -->
            <div class="bottom-content">
                <form method="POST" action="addReminder.php">
                    <input class="addNote" name="content" type="text" placeholder="Add a new note...">
                    <input type="submit" value="Add note..." class="add-note-button"></input>
                </form>
            </div>
        </div>
    </div>
</body>
</html>