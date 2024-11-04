<!-- Indigency Modal -->
<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-5">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certificateModalLabel">Certificate Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
                <div class="col-4 m-5">

                    <form class="bg-light rounded-3 shadow p-5" id="certificateForm">
                        <input type="hidden" name="type" id="barangay_type" value="certificate" />
                        <div class="mb-3">
                            <label for="certificateFullName" class="form-label">Full Name : </label>
                            <input type="text" class="form-control text-capitalize" id="certificateFullName" name="fullname" required
                                oninput="updateDisplayCertificate()">
                        </div>
                        <div class="mb-3">
                            <label for="certificateAddress" class="form-label">Address : </label>
                            <input type="text" class="form-control text-capitalize" id="certificateAddress" name="address" required oninput="updateDisplayCertificate()">
                        </div>
                        <div class="mb-3">
                            <label for="certificatePurpose" class="form-label">Purpose : </label>
                            <input type="text" class="form-control text-capitalize" id="certificatePurpose" name="purpose" required
                                oninput="updateDisplayCertificate()">
                        </div>
                        <div class="mb-3">
                            <label for="certificateDateInput" class="form-label">Date</label>
                            <input type="date" class="form-control" id="certificateDateInput" name="date" required oninput="updateDisplayCertificate()">
                        </div>

                    </form>
                </div>
                <div class="certificateIndigencyPrint p-3 col-7" id="certificatePrintContent">
                    <div class="border border-dark p-3">
                        <div class="header">
                            <div class="d-flex justify-content-between align-items-center py-2 px-5"
                                style="border-bottom: solid 3px #000;">
                                <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                                <div class="d-block text-center" style="line-height: 0.3;">
                                    <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                                    <p class="mt-2 fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of
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

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">HON. RODOLFO
                                        D. OLIVA <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Punong
                                            Barangay</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ROSALINA V. TIGLAO
                                        <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Treasurer</small>
                                    </p>

                                    <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">NANCY E.
                                        MARCELINO <br /> <small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Secretary</small>
                                    </p>

                                    <br /><br /><br /><br /><br />

                                    <small style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">
                                        Kagawad:</small><br /><br /><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MARIVIC
                                        GALIT HSIEH</p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">JUAN J. ESPAYOS JR
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MELVIN F. ESPAYOS
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">CONCEPCION T. CAMMAYO
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MANOLITO N. BAOILAN</p><br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">VICTOR C. DIAZ</p>
                                    <br />
                                    <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ENGRACIA T. LAMPA</p>

                                    <br /><br /><br />
                                </div>
                                <div class="col-9 z-3">
                                    <div class="text-center mt-5" style="line-height: 0.3;">
                                        <h5 class="fw-bold fs-3 tracking-widest" style="font-family: 'Times New Roman', Times, serif;">
                                            BARANGAY CERTIFICATE
                                        </h5>
                                        <p class="fw-bold" style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Control
                                            No. :</p>
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
                                            id="certificateClearanceDisplayName" readonly>
                                        is a <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BONAFIDE
                                            RESIDENT</span> of <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BARANGAY
                                            185 ZONE 16 DISTRICT 3</span>
                                        presently residing at <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-100"
                                            id="certificateDisplayAddress" readonly> <br /><br /><br />

                                        this Barangay Certificate is being issued for the following purposes:
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-100"
                                            id="certificateDisplayPurpose" readonly>

                                        <br /><br /><br />
                                        Given on this
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 2rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="certificateDay" readonly>
                                        <sup id="certificateSuffix"></sup>
                                        day of
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="certificateMonth" readonly>
                                        in the year of our Lord,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="certificateYear" readonly>
                                        at the <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">Office of Barangay 185 Zone 16 District 3, Malaria, City of Caloocan.</span>
                                    </div>

                                    <div class="container-fluid" style="margin-top: 6rem;">
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center mt-5">
                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. RODOLFO D. OLIVA</strong> <br />
                                                    Punong Barangay
                                                </p>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="submitCertificate">Print</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#submitCertificate').on('click', function() {

            const formData = {
                fullname: $('#certificateFullName').val(),
                address: $('#certificateAddress').val(),
                purpose: $('#certificatePurpose').val(),
                date: $('#certificateDateInput').val(),
                type: $('#barangay_type').val()
            };

            console.log("tet", formData)
            // Send data using AJAX
            $.ajax({
                url: 'http://localhost/barangay/certificate/create_certificate',
                type: 'POST',
                data: formData,
                success: function(response) {

                    printModalContentCertificate();

                },
                error: function(xhr, status, error) {

                    alert('Error submitting data: ' + error);
                }
            });
        });
    });
</script>