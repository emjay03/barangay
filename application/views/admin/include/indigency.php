<!-- Indigency Modal -->
<div class="d-none" id="indigencyModal" tabindex="-1" aria-labelledby="indigencyModalLabel" aria-hidden="true">
    <div class="container-fluid p-5">
        <div class="">
            <div class="d-flex justify-content-start align-items-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('indigencyModal').classList.add('d-none'); 
                            document.getElementById('certificateInsurance').classList.remove('d-none');">
                    Back
                </button>
                <h5 class="modal-title mx-5 fs-3 fw-bold" id="indigencyModalLabel"><i
                        class="bi bi-file-text me-2"></i>Indigency Details</h5>
            </div>
            <div class="container-fluid row w-100">
                <div class="col-4 m-5 d-flex justify-content-center align-items-start">
                    <form class="bg-light w-100 rounded-3 shadow p-5" id="indigencyForm">
                        <input type="hidden" name="type" id="indigencyType" value="Indigency" />
                        <div class="mb-3">
                            <label for="indigencyFullname" class="form-label">Full Name : </label>
                            <input type="text" class="form-control text-capitalize" id="indigencyFullname"
                                name="fullname" required oninput="updateDisplayIndigency()">
                        </div>
                        <div class="mb-3">
                            <label for="indigencyAddress" class="form-label">Address : </label>
                            <input type="text" class="form-control text-capitalize" id="indigencyAddress" name="address"
                                required oninput="updateDisplayIndigency()">
                        </div>
                        <div class="mb-3">
                            <label for="indigencyPurpose" class="form-label">Purpose : </label>
                            <input type="text" class="form-control text-capitalize" id="indigencyPurpose" name="purpose"
                                required oninput="updateDisplayIndigency()">
                        </div>
                        <div class="mb-3">
                            <label for="indigencyDateInput" class="form-label">Date</label>
                            <input type="date" class="form-control" id="indigencyDateInput" name="date" required
                                oninput="updateDisplayIndigency()" readonly>
                        </div>


                    </form>
                </div>
                <div class="indigencyPrint col-7" id="indigencyPrintContent">
                    <div class="border border-dark p-3">
                        <div class="header">
                            <div class="d-flex justify-content-between align-items-center py-2 px-5"
                                style="border-bottom: solid 3px #000;">
                                <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                                <div class="d-block text-center" style="line-height: 0.3;">
                                    <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                                    <p class="mt-2 fw-bold"
                                        style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of
                                        Caloocan</p>
                                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Barangay
                                        158 Zone 16 District 3</p>
                                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Mobile No.
                                        : 0921-9662901</p>
                                </div>
                                <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle"
                                    height="80" />
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-3 text-center pt-2 text-justify jus fs-5"
                                    style="border-right: solid 1px #000; line-height: 1;">
                                    <p class="fw-bold text-break">SANGUNIANG BARANGAY 185</p>

                                    <p class="fw-bolder mt-5 lh-sm"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">HON.
                                        RODOLFO
                                        D. OLIVA <br /> <small class="fw-normal"
                                            style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Punong
                                            Barangay</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ROSALINA
                                        V. TIGLAO
                                        <br /> <small class="fw-normal"
                                            style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Treasurer</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">NANCY E.
                                        MARCELINO <br /> <small class="fw-normal"
                                            style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Secretary</small>
                                    </p>

                                    <br /><br /><br /><br /><br />

                                    <small style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">
                                        Kagawad:</small><br /><br /><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MARIVIC
                                        GALIT HSIEH</p><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">JUAN J.
                                        ESPAYOS JR
                                    </p><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MELVIN F.
                                        ESPAYOS
                                    </p><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">
                                        CONCEPCION T. CAMMAYO
                                    </p><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MANOLITO
                                        N. BAOILAN</p><br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">VICTOR C.
                                        DIAZ</p>
                                    <br />
                                    <p class="fw-semibold"
                                        style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ENGRACIA
                                        T. LAMPA</p>

                                    <br /><br /><br />
                                </div>
                                <div class="col-9 z-3">
                                    <div class="text-center mt-5" style="line-height: 0.3;">
                                        <h5 class="fw-bold fs-3 tracking-widest"
                                            style="font-family: 'Times New Roman', Times, serif;">
                                            BARANGAY INDIGENCY
                                        </h5>
                                        <p class="fw-bold"
                                            style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">
                                            Control
                                            No. : <span id="controlNo"></span></p>
                                    </div>
                                    <div class="position-relative w-75 z-n1 mt-5 mx-3">
                                        <img src="application/public/logo.png" alt="bglogo"
                                            class="rounded-circle w-100 position-absolute mx-5" style="opacity: 0.1;" />
                                    </div>
                                    <div class="px-3 text-justify z-3"
                                        style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem; line-height: 1.5">
                                        <span style="margin-left: 5rem; font-size: 17px;"></span>This is to certify
                                        that,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-50"
                                            id="indigencyDisplayName" readonly>
                                        is a bonafide resident of this barangay, presently residing at
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-75"
                                            id="indigencyDisplayAddress" readonly>,
                                        who belongs to the <strong
                                            style="font-family: 'Times New Roman', Times, serif;">INDIGENT
                                            FAMILY</strong> with low average Family Income / no Permanent Job.
                                        <br /> <br />
                                        <span style="margin-left: 5rem;"></span>This certification is being issued upon
                                        from the request of the
                                        above-mentioned named to comply
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-50"
                                            id="indigencyDisplayPurpose" readonly>.<br /> <br />

                                        Given on this
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 2rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent"
                                            id="indigencyDay" readonly>
                                        <sup id="indigencySuffix"></sup>
                                        day of
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent"
                                            id="indigencyMonth" readonly>
                                        in the year of our Lord,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent"
                                            id="indigencyYear" readonly>
                                        at the <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">Office
                                            of Barangay 185 Zone 16 District 3, Malaria, City of Caloocan.</span>
                                    </div>

                                    <div class="container-fluid" style="margin-top: 6rem;">
                                        <div class="row">
                                            <div class="col-6 mt-5">
                                                <img src="application/public/signature1.png" alt="" height="65"
                                                    class="pb-2 top-0 mx-5"
                                                    style="border-bottom: solid 2px #000; position-absolute">
                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. RODOLFO D. OLIVA</strong> <br />
                                                    Punong Barangay
                                                </p>
                                            </div>
                                            <div class="col-6 ">

                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. ENGRACIA T. LAMPA</strong> <br />
                                                    Barangay Kagawad On Duty
                                                </p>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center align-items-center border border-dark p-4 text-capitalize fw-bold"
                                                style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 4rem;">
                                                Note: Valid for Six (6) Months from the Date of Issuance
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer w-full d-flex justify-content-end">
                    <!-- <button type="button" class="btn btn-secondary btn-sm mx-2 px-5" data-bs-dismiss="modal">Close</button> -->
                    <button type="print" class="btn btn-success btn-sm px-5 py-2 mt-5 w-25 fs-5 fw-semibold"
                        id="indigencySubmitBtn">Print</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#indigencySubmitBtn').on('click', function () {
            // Get form data
            const formData = {
                fullname: $('#indigencyFullname').val(),
                address: $('#indigencyAddress').val(),
                purpose: $('#indigencyPurpose').val(),
                date: $('#indigencyDateInput').val(),
                type: $('#indigencyType').val()
            };

            console.log(formData)
            // Send data using AJAX
            $.ajax({
                url: 'http://localhost/barangay/certificate/create_certificate',
                type: 'POST',
                data: formData,
                success: function (response) {

                    printModalContent();

                },
                error: function (xhr, status, error) {
                    // Handle error
                    alert('Error submitting data: ' + error);
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        var dateInput = document.getElementById("indigencyDateInput");

        // Get today's date in YYYY-MM-DD format
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;

        // Set the input value to today's date
        dateInput.value = today;
    });
</script>