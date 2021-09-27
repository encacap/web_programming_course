<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./style.css" />
        <title>1851120020 - Nguyễn Khắc Khánh</title>
    </head>
    <body>
        <?php
        $username = "";
        $password = "";
        $confirmPassword = "";
        $secretQuestion = "";
        $secretAnswer = "";
        $lastName = "";
        $firtName = "";
        $dateOfBirth = [
            "day" => "",
            "month" => "",
            "year" => "",
        ];
        $gender = "";
        $job = "";
        $hobbies = [
            "music" => false,
            "travel" => false,
            "research" => false,
            "business" => false,
        ];
        $error = [
            "username" => "",
            "password" => "",
            "confirmPassword" => "",
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Username
            if (empty($_POST["username"])) {
                $error["username"] = "Tên đăng nhập không được phép để trống";
            } else {
                $username = $_POST["username"];
            }

            // Password
            if (empty($_POST["password"])) {
                $error["password"] = "Mật khẩu không được phép để trống";
            } else {
                $password = $_POST["password"];
            }

            // Confirm password
            if (
                isset($_POST["password"]) &&
                isset($_POST["confirm_password"])
            ) {
                if ($_POST["password"] != $_POST["confirm_password"]) {
                    $error["confirmPassword"] = "Mật khẩu không trùng khớp";
                } else {
                    $confirmPassword = $_POST["confirm_password"];
                }
            }

            // Câu hỏi bí mật
            if (!empty($_POST["secret_question"])) {
                $secretQuestion = $_POST["secret_question"];
            }

            // Trả lời câu hỏi bí mật
            if (!empty($_POST["secret_answer"])) {
                $secretAnswer = $_POST["secret_answer"];
            }

            // Họ và tên đệm
            if (!empty($_POST["last_name"])) {
                $lastName = $_POST["last_name"];
            }

            // Tên
            if (!empty($_POST["first_name"])) {
                $firtName = $_POST["first_name"];
            }

            // Ngày sinh
            if (!empty($_POST["day"])) {
                $dateOfBirth["day"] = $_POST["day"];
            }

            // Tháng sinh
            if (!empty($_POST["month"])) {
                $dateOfBirth["month"] = $_POST["month"];
            }

            // Năm sinh
            if (!empty($_POST["year"])) {
                $dateOfBirth["year"] = $_POST["year"];
            }

            // Giới tính
            if (!empty($_POST["gender"])) {
                $gender = $_POST["gender"];
            }

            // Âm nhạc
            if (!empty($_POST["music"])) {
                $hobbies["music"] = $_POST["music"];
            }

            // Du lịch
            if (!empty($_POST["travel"])) {
                $hobbies["travel"] = $_POST["travel"];
            }

            // Nghiên cứu
            if (!empty($_POST["research"])) {
                $hobbies["research"] = $_POST["research"];
            }

            // Kinh doanh
            if (!empty($_POST["business"])) {
                $hobbies["business"] = $_POST["business"];
            }
        }
        ?>
        <form action="" method="POST">
            <div class="form_header">Đăng ký người dùng</div>
            <div class="form_body">
                <div class="form_block">
                    <div class="form_group">
                        <label for="username">Tên đăng nhập:</label>
                        <input type="text" name="username" id="username" value="<?php echo $username; ?>" />
                        <span class="required">*</span>
                        <div class="form_message error"><?php echo $error[
                            "username"
                        ]; ?></div>
                    </div>
                    <div class="form_group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" name="password" id="password" value="<?php echo $password; ?>" />
                        <span class="required">*</span>
                        <div class="form_message">(Tối thiểu 5 ký tự)</div>
                        <div class="form_message error"><?php echo $error[
                            "password"
                        ]; ?></div>
                    </div>
                    <div class="form_group">
                        <label for="confirm_password">Gõ lại mật khẩu:</label>
                        <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirmPassword; ?>" />
                        <span class="required">*</span>
                        <div class="form_message error"><?php echo $error[
                            "confirmPassword"
                        ]; ?></div>
                    </div>
                </div>
                <div class="form_block">
                    <div class="form_block_header">:: Nhập thông tin để lấy lại mật khẩu khi quên</div>
                    <div class="form_group">
                        <label for="secret_question">Câu hỏi bí mật:</label>
                        <select name="secret_question" id="secret_question">
                            <option value="">[Chọn câu hỏi]</option>
                            <option value="1" <?php if (
                                $secretQuestion === "1"
                            ) {
                                echo "selected";
                            } ?>>Tên của bạn là gì?</option>
                        </select>
                    </div>
                    <div class="form_group">
                        <label for="secret_answer">Trả lời:</label>
                        <input type="text" name="secret_answer" id="secret_answer" value="<?php echo $secretAnswer; ?>" />
                    </div>
                </div>
                <div class="form_block">
                    <div class="form_block_header">:: Thông tin cá nhân</div>
                    <div class="form_group">
                        <label for="last_name">Họ và chữ lót:</label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo $lastName; ?>" />
                    </div>
                    <div class="form_group">
                        <label for="first_name">Tên:</label>
                        <input type="text" name="first_name" id="first_name" value="<?php echo $firtName; ?>" />
                    </div>
                    <div class="form_group">
                        <label for="birthday">Ngày sinh:</label>
                        <select name="month" id="month">
                            <option value=""></option>
                            <option value="1" <?php if (
                                $dateOfBirth["month"] === "1"
                            ) {
                                echo "selected";
                            } ?>>1</option>
                            <option value="2" <?php if (
                                $dateOfBirth["month"] === "2"
                            ) {
                                echo "selected";
                            } ?>>2</option>
                        </select>
                        ,
                        <input class="short" type="number" min="1" max="31" name="day" id="day" value="<?php echo $dateOfBirth[
                            "day"
                        ]; ?>" />
                        ,
                        <input class="short" type="number" name="year" id="year" value="<?php echo $dateOfBirth[
                            "year"
                        ]; ?>" />
                        <span>(Month, DD, YYYY)</span>
                    </div>
                    <div class="form_group">
                        <label for="gender">Giới tính:</label>
                        <input type="radio" name="gender" id="male" value="male" <?php if (
                            $gender === "male"
                        ) {
                            echo "checked";
                        } ?> />
                        Nam
                        <input type="radio" name="gender" id="female" value="female" <?php if (
                            $gender === "female"
                        ) {
                            echo "checked";
                        } ?> />
                        Nữ
                    </div>
                    <div class="form_group">
                        <label for="job">Nghề nghiệp liên quan:</label>
                        <select name="job" id="job">
                            <option value="">[Chọn ngành nghề]</option>
                        </select>
                    </div>
                </div>
                <div class="form_block">
                    <div class="form_block_header">:: Sở thích (tuỳ chọn)</div>
                    <div class="form_group cols">
                        <div class="col">
                            <input type="checkbox" name="music" id="music" <?php if (
                                $hobbies["music"]
                            ) {
                                echo "checked";
                            } ?> />
                            <label for="music">Âm nhạc</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" name="travel" id="travel" <?php if (
                                $hobbies["travel"]
                            ) {
                                echo "checked";
                            } ?> />
                            <label for="travel">Du lịch</label>
                        </div>
                    </div>
                    <div class="form_group cols">
                        <div class="col">
                            <input type="checkbox" name="research" id="research" <?php if (
                                $hobbies["research"]
                            ) {
                                echo "checked";
                            } ?> />
                            <label for="research">Nghiên cứu</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" name="business" id="business" <?php if (
                                $hobbies["business"]
                            ) {
                                echo "checked";
                            } ?> />
                            <label for="business">Kinh doanh</label>
                        </div>
                    </div>
                </div>
                <div class="form_block center">
                    <button type="submit">Đăng ký</button>
                    <button type="reset">Xoá</button>
                </div>
            </div>
        </form>
    </body>
</html>
