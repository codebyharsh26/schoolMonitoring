<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/adminkit-dev/static/css/teacher-list-display.css">
    <title>Principal Details</title>
    <style>
        .card {
            min-height: 16.5rem;
        }
        .align-middle{
        font-size:14px;
    }
    .align-middle-cstm{
        font-size:19.4px;
    }
    </style>
</head>


<body>
    <main role="main" class="content p-4">
        <div class="container p-0 m-0">
            <div class="container p-0">
                <h1 class="h3 mb-3" style="font-weight:normal"><strong class="h1"
                        style="font-weight:normal">Principals</strong> List</h1>
                <!-- Filter Section -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <form method="GET" action="" class="form-inline">
                            <div class="form-group mr-2">
                                <label for="schoolFilter" class="mr-2">Filter by School:</label>
                                <select name="school_filter" id="schoolFilter" class="form-control"
                                    onchange="this.form.submit()">
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
                            </div>

                            <?php if (isset($_GET['page'])): ?>
                                <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
                            <?php endif; ?>

                            <?php if (isset($_GET['school_filter']) && $_GET['school_filter'] != 'all'): ?>
                                <a href="?" class="btn btn-sm btn-outline-danger ml-2">Clear Filter</a>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <?php
                    include_once 'connection.php';

                    $limit = 21; // Number of records per page
                    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
                    $offset = ($page - 1) * $limit; // Offset for pagination

                    // Handle school filter
                    $filter_condition = "";
                    if (isset($_GET['school_filter']) && $_GET['school_filter'] != 'all') {
                        $school_filter = mysqli_real_escape_string($conn, $_GET['school_filter']);
                        $filter_condition = "WHERE school_no = '$school_filter'";
                    }

                    // Count total records with filter applied
                    $total_query = "SELECT COUNT(*) FROM principal_1 $filter_condition";
                    $total_result = mysqli_query($conn, $total_query);
                    $total_rows = mysqli_fetch_array($total_result)[0];
                    $total_pages = ceil($total_rows / $limit); // Total pages

                    // Fetch records for the current page with filter applied
                    $select = "SELECT * FROM principal_1 $filter_condition LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $select);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img src="' . $row['principal_image'] . '" alt="Principal Image" class="card-img-top" style="height: 200px; object-fit: cover">
                                            <div class="card-body">
                                                <h2 class="card-title" style="font-weight: bold; font-size: 24px; color: black;">' . $row['principal_full_name'] . ' <small class="text-muted" style="font-size: 15px;">' . $row['qualification'] . '</small></h2>
                                                <p class="card-text"><b>Email:</b> ' . $row['email'] . '</p>
                                                <p class="card-text"><b>Phone Number:</b> ' . $row['phone'] . '</p>
                                                <p class="card-text"><b>Gender:</b> ' . $row['gender'] . '</p>
                                                <p class="card-text"><b>School Name:</b> ' . $row['school_name'] . '</p>
                                                <p class="card-text"><b>School Number:</b> ' . $row['school_no'] . '</p>
                                            </div>
                                        </div>
                                    </div>';
                        }
                    } else {
                        echo '<div class="col-12 text-center p-5">
                                <div class="alert alert-info">No principals found matching your criteria.</div>
                              </div>';
                    }
                    ?>
                </div>
            </div>
            <!-- Pagination with filter preservation -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php
                    // Build the query string for pagination links
                    $query_string = "";
                    if (isset($_GET['school_filter'])) {
                        $query_string = "school_filter=" . urlencode($_GET['school_filter']) . "&";
                    }

                    if ($page > 1):
                    ?>
                        <li class="page-item"><a class="page-link"
                                href="?<?php echo $query_string; ?>page=<?php echo $page - 1; ?>">Previous</a></li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php if ($i == $page)
                                                    echo 'active'; ?>">
                            <a class="page-link"
                                href="?<?php echo $query_string; ?>page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $total_pages): ?>
                        <li class="page-item"><a class="page-link"
                                href="?<?php echo $query_string; ?>page=<?php echo $page + 1; ?>">Next</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </main>

    <script>
        // Set the selected school in the dropdown when page loads
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_GET['school_filter'])): ?>
                document.getElementById('schoolFilter').value = '<?php echo $_GET['school_filter']; ?>';
            <?php endif; ?>
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>