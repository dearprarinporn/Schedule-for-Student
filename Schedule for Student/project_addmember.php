<?php
include('navbar.php');
include('condb.php');
include('h.php');
include('stylemember.php');

// เริ่ม Session
//session_start();

// เข้าถึงข้อมูลจาก Session
if(isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];

    // สามารถนำ $user_id ไปใช้งานต่อได้ เช่น นำมาใช้ในการเข้าถึงฐานข้อมูลหรือทำอย่างอื่นตามต้องการ
    // ตัวอย่างเช่น
    //echo "Project ID: " . $p_id;
} else {
    echo "Session p_id not set";
}
?><br>

<body>
    <div class="container"><br>
        <h1>Add member</h1> 
        <div class="block2">
        <form action="project_addmemberdb.php" method="post">
            <b>
                <div class="input-box"><br><br>
                    <label for="u_id">Add Member:</label>
                    <select id="u_id_1" name="u_id">
                        <option value="">Add Member</option>
                        <?php
                        $sql = "SELECT * FROM member WHERE u_email LIKE '%@psu.ac.th' ";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["u_id"] . "'>" . $row["u_email"] . "</option>";
                            }
                        }       
                        ?>
                    </select>
                </div>
                <input type="hidden" name="p_id" value="<?php echo $p_id;?>">
                <!-- ส่วนของเพิ่มช่อง -->
                <div id="additional-members">
                    <!-- ช่องที่เพิ่มได้จะอยู่ในส่วนนี้ -->
                </div>
                
                <!-- ปุ่มเพิ่มช่อง -->
                <a class="createbtn3" href="project_detail.php?p_id=<?php echo $p_id; ?>">Back</a>



                <button type="submit" a href="project_memberdb.php?p_id=<?php echo $row['p_id']; ?>" class="createbtn3">Create</button>
                
            </b>
        </form>
    </div>

    <script>
        var memberCount = 1;

        function addMember() {
            var additionalMembersDiv = document.getElementById('additional-members');
            memberCount++;

            var newMemberDiv = document.createElement('div');
            newMemberDiv.classList.add('input-box');
            newMemberDiv.innerHTML = "<label for='u_id_" + memberCount + "'>Add Member " + memberCount + ":</label>" +
                "<select id='u_id_" + memberCount + "' name='u_id[]'>" +
                "<option value=''>Add Member</option>" +
                "<?php
                $sql = 'SELECT * FROM member WHERE u_email LIKE "%@psu.ac.th"';
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["u_id"] . '">' . $row["u_email"] . '</option>';
                    }
                }
                ?>" +
                "</select>";

            additionalMembersDiv.appendChild(newMemberDiv);
        }

    //    function Back() {
            // Define your back function here
            // For example:
    //        window.location.href = "home.php"; // Redirect to home page
    //    
    
    </script>
    
    <style>
        .input-box {
            margin-bottom: 20px; /* เพิ่มระยะห่างระหว่างช่อง */
        }

        .addmember-button {
            background-color: yellow; /* เปลี่ยนสีปุ่มเป็นเหลือง */
            color: black; /* ตัวอักษรสีดำ */
            width: 150px;
            border-radius: 40px;
            margin: 40; 
        }

        .back-button {
            background-color: red;
            color: white;
            width: 150px;
            border-radius: 40px;
            margin: 40; 
        }

        .create-button {
            background-color: green;
            color: white; 
            width: 150px;
            border-radius: 40px;
            margin: 40;
        }
    </style>
</body>