<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
<meta name="author" content="AdminKit">
<meta name="keywords"
    content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

<link rel="canonical" href="https://demo-basic.adminkit.io/ui-typography.html" />

<title>Announcement</title>

<link href="css/app.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->


<style>
:root {
    --primary-color: #1e2b3a;
    --secondary-color: #f5f7fa;
    --accent-color: #3b82f6;
    --text-color: #333;
    --border-color: #d1d5db;
}

* {
    /* margin: 0; */
    /* padding: 0; */
    box-sizing: border-box;
    /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif; */
}

.main {
    width: 100%;
}

.form-container {
    background-color: var(--form-bg);
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: var(--card-shadow);
}

.form-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #1e2b3a;
}

.form-description {
    color: #6b7280;
    margin-bottom: 25px;
}

.form-section {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
}

.form-section-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #1e2b3a;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px 20px;
}

.form-group {
    flex: 1;
    min-width: 250px;
    padding: 0 10px;
    margin-bottom: 15px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
}

.required::after {
    content: " *";
    color: #ef4444;
}

.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid var(--border-color);
    border-radius: 6px;
    background-color: #f9fafb;
    font-size: 14px;
}

.form-control:focus {
    outline: none;
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
}

.rich-editor {
    min-height: 200px;
    border: 1px solid var(--border-color);
    border-radius: 6px;
    background-color: #f9fafb;
    margin-bottom: 15px;
}

.editor-toolbar {
    display: flex;
    padding: 8px;
    border-bottom: 1px solid var(--border-color);
    background-color: #f1f5f9;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.editor-button {
    background: none;
    border: none;
    padding: 6px 10px;
    margin-right: 5px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.editor-button:hover {
    background-color: #e2e8f0;
}

.editor-content {
    padding: 12px;
    min-height: 150px;
}

.checkbox-group {
    margin-top: 10px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    cursor: pointer;
}

.checkbox-input {
    margin-right: 8px;
}

.file-upload {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.file-upload-input {
    display: none;
}

.file-upload-button {
    padding: 8px 16px;
    background-color: #f1f5f9;
    border: 1px solid var(--border-color);
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 10px;
}

.file-upload-button:hover {
    background-color: #e2e8f0;
}

.file-name {
    color: #6b7280;
    font-size: 14px;
}

.priority-selector {
    display: flex;
    margin-top: 10px;
}

.priority-option {
    flex: 1;
    text-align: center;
    padding: 10px;
    border: 1px solid var(--border-color);
    background-color: #f9fafb;
    cursor: pointer;
    transition: all 0.2s;
}

.priority-option:first-child {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

.priority-option:last-child {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}

.priority-option.selected {
    background-color: var(--accent-color);
    color: white;
    border-color: var(--accent-color);
}

/* announcement css */
.anouncement-textarea {
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    padding: 15px;
    margin: 13px 0 0 0;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
input[type="date"],
textarea,
select {
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    padding: 15px;
    margin: 13px 0;
}

.pdf {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background: #f1f1f1;
}

.upload {
    background: white;
    margin-top: 10px;
    margin-left: 2px;
    margin-bottom: 3 px;
    color: #222e3c;
    outline: 2px solid #222e3c;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
    font-weight: bold;
    text-decoration: none;
}

.upload:hover {
    background: #222e3c;
    text-decoration: none;
    color: white;
}

.h2 {
    color: #222e3c;
}

/* over upload pdf */


.form-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 30px;
}

.btn {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 500;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-primary {
    background-color: var(--accent-color);
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #2563eb;
}

.btn-secondary {
    background-color: white;
    color: #4b5563;
    border: 1px solid #d1d5db;
    margin-right: 10px;
}

.btn-secondary:hover {
    background-color: #f9fafb;
}

.btn-preview {
    background-color: #10b981;
    color: white;
    border: none;
    margin-right: 10px;
}

.btn-preview:hover {
    background-color: #059669;
}

@media (max-width: 768px) {
    .form-group {
        flex: 0 0 100%;
    }

    .priority-selector {
        flex-direction: column;
    }

    .priority-option {
        border-radius: 0;
        margin-bottom: -1px;
    }

    .priority-option:first-child {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 0;
    }

    .priority-option:last-child {
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top-right-radius: 0;
    }
}

.sidebar-nav li {
        font-size: 12px;
        font-weight: 500;
    }

/* Align Sign Out at the bottom */
.sidebar-content {
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.sidebar-nav {
    flex-grow: 1;
    /* Pushes content up, moving the footer to the bottom */
}
.align-middle{
        font-size:14px;
    }
</style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <?php
			include_once("sidebar.php");
			?>
        </div>
        <div class="main">
            <?php
			include_once("navbar.php");
			?>
			
			<form action="BMC-announce.php" method="POST" enctype="multipart/form-data">
			<main class="content p-4">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong class="h1">Announcement</strong> Form</h1>
					<div class="form-section">
						<div class="container-f">
							<h2 class="form-section-title">Announcement Details</h2>

							<input type="text" name="title" placeholder="Enter Announcement Title" required>
							<select name="school_no" required>
								<option value="">Select Schools</option>
								<option value="all">All Schools</option>
                                <option value="1">1 - Brahmmasi Vashishth Primary School</option>
                                <option value="2">2 - Brahmmasi Vashishth Primary School</option>
                                <option value="3">3 - Chanakya Primary School</option>
                                <option value="4">4 - Chanakya Primary School</option>
                                <option value="5">5 - Shri Shaheed Bachubhai Virjibhai Primary School</option>
                                <option value="7">7 - Shri Ambika Primary School</option>
                                <option value="8">8 - Shri Vir Savarkar Primary School</option>
                                <option value="10">10 - Shri Anandvihar Primary School</option>
                                <option value="11">11 - Shri Bhuta Rugnath Primary School</option>
                                <option value="12">12 - Shri Bhuta Rugnath Primary School</option>
                                <option value="13">13 - Shri Lalkrishna Advani Primary School</option>
                                <option value="14">14 - Shri Jalarambapa Primary School</option>
                                <option value="15">15 - Shri Jalarambapa Primary School</option>
                                <option value="18">18 - Mathuriya Bhanji Abji Primary School</option>
                                <option value="19">19 - Mathuriya Bhanji Abji Primary School</option>
                                <option value="20">20 - Shri Rabindranath Tagore Primary School</option>
                                <option value="22">22 - Shri Swami Vivekanand Primary School</option>
                                <option value="24">24 - Shri Subhashchandra Bose Primary School</option>
                                <option value="25">25 - Shri A.V. School Primary School</option>
                                <option value="28">28 - Shri Santkanvaram Primary School</option>
                                <option value="30">30 - Madhavray Sadhashiv Golwalkar Primary School</option>
                                <option value="31">31 - Shri Nanimajirajba Primary School</option>
                                <option value="33">33 - Shri Nanimajirajba Primary School (Urdu)</option>
                                <option value="36">36 - Dr. C.V. Raman Primary School</option>
                                <option value="37">37 - Shri Moti Majirajba Primary School</option>
                                <option value="38">38 - Shri Atal Bihari Vajpayee Primary School</option>
                                <option value="40">40 - Chhatrapati Shivaji Primary School</option>
                                <option value="42">42 - Shri Shaheed Bhagat Singh Primary School</option>
                                <option value="44">44 - Shri Maharana Pratap Primary School</option>
                                <option value="45">45 - Shri Maharana Pratap Primary School</option>
                                <option value="47">47 - Shri Lalbahadur Shastri Primary School</option>
                                <option value="48">48 - Shri Kasturba Mohandas Gandhi Primary School</option>
                                <option value="49">49 - Jhansi Ki Rani Laxmibai Primary School</option>
                                <option value="50">50 - Dr. Abdul Kalam Primary School</option>
                                <option value="51">51 - Dr. Abdul Kalam Primary School</option>
                                <option value="52">52 - Jhansi Ki Rani Laxmibai Primary School</option>
                                <option value="53">53 - Shri Pramukh Swami Maharaj Primary School</option>
                                <option value="54">54 - Sant Shri Mastaram Bapa Primary School</option>
                                <option value="55">55 - Gautam Buddha Primary School</option>
                                <option value="58">58 - Shri Sar Takhtsinghji Primary School</option>
                                <option value="59">59 - Sardar Patel Primary School (Girls)</option>
                                <option value="60">60 - Sardar Patel Primary School (Boys)</option>
                                <option value="62">62 - Shri Mahatma Gandhi Primary School</option>
                                <option value="63">63 - Shri Mahatma Gandhi Primary School</option>
                                <option value="65">65 - Shri Gaurishankar Primary School</option>
                                <option value="67">67 - Shri Chandramouli Primary School</option>
                                <option value="68">68 - Shri Krishnapara Primary School</option>
                                <option value="69">69 - Pandit Dindayal Upadhyaya Sanskrit Dham</option>
                                <option value="70">70 - Pandit Dindayal Upadhyaya Sanskrit Dham</option>
                                <option value="72">72 - Dr. Hedgewar Primary School</option>
                                <option value="73">73 - Sardar Singh Rana Primary School</option>
                                <option value="76">76 - Sardar Vallabhbhai Patel Primary School</option>
                                <option value="80">80 - Dr. Bhimrao Ambedkar Primary School</option>
                                <option value="81">81 - Maharaja Krishnakumarsinhji Primary School</option>
                                <option value="83">83 - Shri Maruti Yogaksham Primary School</option>
							</select>
							<textarea name="message" class="anouncement-textarea" id="message"
								placeholder="Enter Message" required></textarea>
							<input type="file" class="pdf" name="pdf_file" accept="application/pdf" required>
							<button class="upload" type="submit" name="upload">Upload</button>
						</div>
					</div>
				</div>
			</main>
			</form>
		</div>
		<?php
			if (isset($_POST['upload'])) {
				$title = $_POST['title'];
				$school_no = $_POST['school_no'];
				$message = $_POST['message'];
				$file = $_FILES['pdf_file'];

				if ($file['type'] != 'application/pdf') {
					echo "<script>alert('Only PDF files are allowed!');</script>";
					exit;
				}

				$uploadDir = '../BMC_announce/uploads/';
				if (!is_dir($uploadDir))
					mkdir($uploadDir, 0777, true);
				$filePath = $uploadDir . basename($file['name']);

				if (move_uploaded_file($file['tmp_name'], $filePath)) {
					$jsonFile = '../BMC_announce/documents.json';
					$data = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
					$data[] = ['title' => $title, 'school_no' => $school_no, 'message' => $message, 'file' => $filePath];
					file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
					echo "<script>alert('Announcement uploaded successfully!');</script>";
				} else {
					echo "<script>alert('Error uploading file.');</script>";
				}
			}
			?>

		<script src="js/app.js"></script>
</body>

</html>