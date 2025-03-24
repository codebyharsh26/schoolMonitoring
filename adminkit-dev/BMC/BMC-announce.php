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

            <main class="content p-4">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong class="h1">Announcement</strong> Form</h1>
                    <div class="form-section">
                        <div class="container-f">
                            <h2 class="form-section-title">Announcement Details</h2>

                            <input type="text" name="title" placeholder="Enter Announcement Title" required>
                            <select name="standard" required>
                                <option value="">Select Standard</option>
                                <option value="All">All Standards</option>
                                <option value="1">Standard 1</option>
                                <option value="2">Standard 2</option>
                                <option value="3">Standard 3</option>
                                <option value="4">Standard 4</option>
                                <option value="5">Standard 5</option>
                                <option value="6">Standard 6</option>
                                <option value="7">Standard 7</option>
                                <option value="8">Standard 8</option>
                            </select>
                            <textarea name="message" class="anouncement-textarea" id="message"
                                placeholder="Enter Message" required></textarea>
                            <input type="file" class="pdf" name="pdf_file" accept="application/pdf" required>
                            <button class="upload" type="submit" name="upload">Upload</button>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-0"><strong>schoolAdmin</strong></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="js/app.js"></script>
        <script>
        // Priority selector
        const priorityOptions = document.querySelectorAll('.priority-option');
        const priorityInput = document.getElementById('priorityLevel');

        priorityOptions.forEach(option => {
            option.addEventListener('click', () => {
                // Remove selected class from all options
                priorityOptions.forEach(opt => opt.classList.remove('selected'));
                // Add selected class to clicked option
                option.classList.add('selected');
                // Update hidden input value
                priorityInput.value = option.dataset.priority;
            });
        });

        // File upload
        const fileUpload = document.getElementById('fileUpload');
        const fileName = document.querySelector('.file-name');
        const fileList = document.getElementById('fileList');

        fileUpload.addEventListener('change', () => {
            if (fileUpload.files.length > 0) {
                if (fileUpload.files.length === 1) {
                    fileName.textContent = fileUpload.files[0].name;
                } else {
                    fileName.textContent = `${fileUpload.files.length} files selected`;
                }

                // Clear file list
                fileList.innerHTML = '';

                // Display selected files
                Array.from(fileUpload.files).forEach(file => {
                    const fileItem = document.createElement('div');
                    fileItem.style.display = 'flex';
                    fileItem.style.alignItems = 'center';
                    fileItem.style.marginTop = '8px';
                    fileItem.innerHTML = `
						<span style="margin-right: 8px; color: #6b7280;">📎</span>
						<span style="flex: 1;">${file.name}</span>
						<span style="color: #6b7280; font-size: 12px;">${(file.size / 1024).toFixed(1)} KB</span>
					`;
                    fileList.appendChild(fileItem);
                });
            } else {
                fileName.textContent = 'No file chosen';
                fileList.innerHTML = '';
            }
        });

        // Rich text editor content to textarea before form submission
        const form = document.querySelector('.form-container');
        const editorContent = document.querySelector('.editor-content');
        const contentTextarea = document.getElementById('announcementContent');

        form.addEventListener('submit', () => {
            contentTextarea.value = editorContent.innerHTML;
        });

        // Set minimum date for start date and end date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('startDate').min = today;
        document.getElementById('endDate').min = today;

        // Update end date min attribute when start date changes
        document.getElementById('startDate').addEventListener('change', function() {
            document.getElementById('endDate').min = this.value;
        });
        </script>
</body>

</html>i