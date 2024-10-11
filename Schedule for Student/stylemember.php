<!DOCTYPE html>
<html lang="en">

<body>
    <style>
        <style>

        /**------------------------Home------------------------*/
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-top: 0;
            text-align: center;
        }

        .left {
            margin-bottom: 20px;
        }

        .createbtn {
            width: 190px;
            height: 50px;
            background-color: #FFF8BA;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #FE9A05;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .createbtn:hover {
            background-color: #FE9A05;
            color: #fff;
        }
        .createbtn1 {
            width: 190px;
            height: 50px;
            background-color: #CCFF99;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #669933;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .createbtn1:hover {
            background-color: #669933;
            color: #fff;
        }
        .createbtn2 {
      width: 110px;
            height: 40px;
            background-color: #dc3545;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #000;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
    }

    .createbtn2:hover {
      background-color: #dc3545;
      color: #fff;
    }
        
    .createbtn3 {
      width: 110px;
            height: 40px;
            background-color: #99CCFF;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #6666FF;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
    }

    .createbtn3:hover {
      background-color: #6666FF;
      color: #fff;
    }
        .block1 {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 0px 20px 10px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;
        }
        .block2 {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 0px 90px 10px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;

        }
        .table {
            font-size: 18px; /* เปลี่ยนเป็นขนาดตัวอักษรที่ต้องการ */
        }

        .flex-container {
            display: flex;
            flex-direction: column;
        }

        .flex-container h2 {
            margin-bottom: 10px;
        }

        .flex-container p {
            margin: 0;
            padding: 5px 0;
            display: flex;
            align-items: inherit;
            /* จัดให้อยู่กลางตามแนวตั้ง */
        }

        .flex-container a {
            text-decoration: none;
            cursor: pointer;
            color: #333;
            display: flex;
            margin-left: 5px;
            /* เพิ่มระยะห่างระหว่างชื่อโปรเจกต์กับไอคอนถังขยะ */
        }

        .flex-container i.bx-trash {
            margin-right: 5px;
            /* เพิ่มระยะห่างด้านขวาของไอคอนถังขยะ */
            display: flex;
            /* ให้ไอคอนถังขยะแสดงเป็น inline element */
            color: red
        }


        .flex-container a:hover {
            text-decoration: underline;
        }

        .flex-container a.delete i.bx-trash {
            display: inline-flex;
            /* ให้ไอคอนถังขยะแสดงเป็น inline element */
        }


        /**---------------Add ac--------------- */
        h3 {
            margin-top: 0;
            text-align: left;
            font-size: 20px;
        }
        h4 { 
            margin-top: 0;
            font-size: 18px;
           
        }
        textarea {
    font-size: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    background-color: #f8f9fa; /* เปลี่ยนสีพื้นหลังตามที่ต้องการ */
    color: #333; /* เปลี่ยนสีข้อความตามที่ต้องการ */


}
textarea:hover {
    border-color: #6c757d; /* เปลี่ยนสีขอบเมื่อ hover */
}
        
        .block-ac {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 20px 20px 20px 20px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;
            max-width: 800px;
        }

        .form-horizontal {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-table {
            width: 100%;
        }

        .form-table th,
        .form-table td {
            padding: 5px 0;
            margin: left;
        }

        .form-table td {
            text-align: right;
        }

        .form-table th {
            text-align: left;
            width: 150px;
            /* กำหนดความกว้างของเซลล์ที่มีชื่อฟิลด์ */
        }

        .form-table input[type="text"],
        .form-table input[type="date"],
        .form-table textarea,
        .form-table select {
            width: calc(100% - 160px);
            /* คำนวณความกว้างของฟิลด์ข้อมูล */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 5px 0;
        }

        .form-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .form-buttons button {
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .block-but {
            margin-bottom: 0px;
            border: none;
            /* เพิ่มเส้นขอบ */
            text-align: center;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            border-radius: 20px;
            max-width: 800px;
        }

        .back-button,
        .create-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 30px;
            /* ระยะห่างรอบขอบของปุ่ม */
            border: 1px solid #ccc;
            border-radius: 20px;
            text-decoration: none;
            color: #333;
            /* สีข้อความ */
            background-color: #fff;
            /* สีพื้นหลัง */
            transition: all 0.3s ease;
            /* เพื่อให้มีการเปลี่ยนแปลงแบบสามารถเห็นได้ชัดเจน */
            font-size: 16px;
            max-width: 800px;
        }

        .back-button {
            background-color: #FF9393;
            /* สีพื้นหลังสำหรับปุ่มสร้าง */
            color: #fff;
            /* สีข้อความสำหรับปุ่มสร้าง */
            margin-top: -40px;
        }

        .back-button:hover {
            background-color: #FF5858;
            /* สีพื้นหลังเมื่อเม้าส์วางทับสำหรับปุ่มสร้าง */
        }

        .create-button {
            background-color: #2D9F6F;
            /* สีพื้นหลังสำหรับปุ่มสร้าง */
            color: #fff;
            /* สีข้อความสำหรับปุ่มสร้าง */
            border-color: #007bff;
            /* สีขอบสำหรับปุ่มสร้าง */
        }

        .create-button:hover {
            background-color: green;
            /* สีพื้นหลังเมื่อเม้าส์วางทับสำหรับปุ่มสร้าง */
        }
/** */
        .createbtn1 {
            width: 190px;
            height: 50px;
            background-color: #CCFF99;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #669933;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .createbtn1:hover {
            background-color: #669933;
            color: #fff;
        }

        .createbtn2 {
      width: 110px;
            height: 40px;
            background-color: #dc3545;
            border-radius: 100px;
            text-align: center;
            padding: 10px 20px;
            border: none;
            color: #000;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
    }

    .createbtn2:hover {
      background-color: #dc3545;
      color: #fff;
    }

    .block2 {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 10px 20px 10px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;

        }

        .block2 {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 10px 20px 10px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;

        }

        .block3 {
            margin-bottom: 20px;
            border: none;
            /* เพิ่มเส้นขอบ */
            padding: 10px 20px 10px;
            /* เพิ่มการเว้นระยะของเนื้อหาภายใน */
            background-color: #ECECEC;
            border-radius: 20px;
            max-width: 800px;
            align-items: center;
        }
        
        textarea:hover {
    border-color: #6c757d; /* เปลี่ยนสีขอบเมื่อ hover */
}
       
        .row.row-cols-2 .col-sm-6 {
  display: flex;
  align-items: center; /* จัดให้อยู่ตรงกลางแนวตั้ง */
}

.row.row-cols-2 .col-sm-6 h3 {
  margin: 0;
}

.row.row-cols-2 .col-sm-6 h4 {
    text-align: right;
}

.row.row-cols-2 .col-sm-6 input,
.row.row-cols-2 .col-sm-6 textarea {
  margin: 0;
  flex: 1; /* ทำให้ input หรือ textarea ขยายตามความกว้างของ flex container */
  width: 100%; /* ให้ input หรือ textarea เต็มความกว้างของ parent */
}


    </style>
</body>