<!-- Indigency Modal -->
<div class="modal fade" id="clearanceModal" tabindex="-1" aria-labelledby="clearanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-5">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clearanceModalLabel">Clearance Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
                <div class="col-4 m-5">
                    <form class="bg-light rounded-3 shadow p-5" id="clearanceForm">
                        <input type="hidden" name="type" id="clearance_type" value="Clearance" />
                        <div class="mb-3">
                            <label for="clearanceFullName" class="form-label">Full Name : </label>
                            <input type="text" class="form-control text-capitalize" id="clearanceFullName" name="fullname" required
                                oninput="updateDisplayClearance()">
                        </div>

                        <div class="mb-3">
                            <label for="clearanceBirthdate" class="form-label">Date of Birth : </label>
                            <input type="date" class="form-control" id="clearanceBirthdate" name="birthdate" required
                                oninput="updateDisplayClearance()">
                        </div>

                        <div class="mb-3">
                            <label for="clearanceBirthplace" class="form-label">Place of Birth : </label>
                            <input type="text" class="form-control text-capitalize" id="clearanceBirthplace" name="placebirth" required
                                oninput="updateDisplayClearance()">
                        </div>

                        <div class="mb-3">
                            <label for="clearanceAddress" class="form-label">Address : </label>
                            <input type="text" class="form-control text-capitalize" id="clearanceAddress" name="address" required
                                oninput="updateDisplayClearance()">
                        </div>

                        <div class="mb-3">
                            <label for="clearanceFindings" class="form-label">Findings : </label>
                            <input type="text" class="form-control text-capitalize" id="clearanceFindings" name="findings" required
                                oninput="updateDisplayClearance()">
                        </div>

                        <div class="mb-3">
                            <label for="clearancePurpose" class="form-label">Purpose : </label>
                            <input type="text" class="form-control text-capitalize" id="clearancePurpose" name="purpose" required
                                oninput="updateDisplayClearance()">
                        </div>
                    </form>
                </div>
                <div class="indigencyPrint p-3 col-7" id="clearanceContent">
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
                                            BARANGAY CLEARANCE
                                        </h5>
                                        <p class="fw-bold"
                                            style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">
                                            Control
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
                                            id="clearanceDisplayName" readonly>
                                        is a <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BONAFIDE
                                            RESIDENT</span> of <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BARANGAY
                                            185 ZONE 16 DISTRICT 3</span>
                                        who was born on <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-25"
                                            id="clearanceDisplayBirthdate" readonly> at <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-50"
                                            id="clearanceDisplayBirthplace" readonly> presently residing at
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 17px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent w-75"
                                            id="clearanceDisplayAddress" readonly> and signature appears hereon has undergone
                                        <span class="fw-bold"
                                            style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">RECORD
                                            CHECK</span> from the office and the result is indicated as follows.
                                        <br /> <br />

                                        <div class="row">
                                            <div class="col-5">
                                                <div class="d-flex">
                                                    <div class="leftThumb">
                                                        <div class="me-3 border border-dark border-3" style="height: 90px; width: 90px;"></div>
                                                        <small style="font-size: 10px; font-family: 'Times New Roman', Times, serif;">Left Thumb Mark</small>
                                                    </div>
                                                    <div class="rightThumb">
                                                        <div class=" me-2 border border-dark border-3" style="height: 90px; width: 90px;"></div>
                                                        <small style="font-size: 10px; font-family: 'Times New Roman', Times, serif;">Right Thumb Mark</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 fw-bold" style="font-size: 18px; font-family: 'Times New Roman', Times, serif;">
                                                FINDINGS:
                                                <input type="text"
                                                    style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                                    class="fw-semibold text-capitalize text-start bg-transparent w-50 mt-3"
                                                    id="clearanceDisplayFinding" readonly><br />
                                                PURPOSE:
                                                <input type="text"
                                                    style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                                    class="fw-semibold text-capitalize text-start bg-transparent w-50"
                                                    id="clearanceDisplayPurpose" readonly>
                                            </div>
                                        </div>
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; font-size: 18px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent mt-4"
                                            id="clearanceSignature" readonly> <br />
                                        Signature-over Printed name
                                    </div>

                                    <div class="container-fluid" style="margin-top: 3rem;">
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
                <button type="submit" class="btn btn-success" id="submitBarangay">Print</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#submitBarangay').on('click', function() {

            const formData = {
                fullname: $('#clearanceFullName').val(),
                address: $('#clearanceAddress').val(),
                purpose: $('#clearancePurpose').val(),
                findings: $('#clearanceFindings').val(),
                placebirth: $('#certificateDateInput').val(),
                birthdate: $('#clearanceBirthdate').val(),
                type: $('#clearane_type').val()
            };

            console.log("tet", formData)
            // Send data using AJAX
            $.ajax({
                url: 'http://localhost/barangay/certificate/create_certificate',
                type: 'POST',
                data: formData,
                success: function(response) {

                    printModalContentClearance();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    alert('Error submitting data: ' + error);
                }
            });
        });
    });
</script>