<!-- Indigency Modal -->
<div class="modal fade" id="indigencyModal" tabindex="-1" aria-labelledby="indigencyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-5">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="indigencyModalLabel">Indigency Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
                <div class="col-4 m-5">
                    <form class="bg-light rounded-3 shadow p-5" id="indigencyForm">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control text-capitalize" id="fullName" required
                                oninput="updateDisplay()">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control text-capitalize" id="address" required oninput="updateDisplay()">
                        </div>
                        <div class="mb-3">
                            <label for="wifeName" class="form-label">Wife's Name</label>
                            <input type="text" class="form-control text-capitalize" id="wifeName" required
                                oninput="updateDisplay()">
                        </div>
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Date</label>
                            <input type="date" class="form-control" id="dateInput" required oninput="updateDisplay()">
                        </div>
                    </form>
                </div>
                <div class="indigencyPrint p-3 col-7" id="printContent">
                    <div class="border border-dark p-3">
                        <div class="header">
                            <div class="d-flex justify-content-between align-items-center py-2"
                                style="border-bottom: solid 1px #000;">
                                <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                                <div class="d-block text-center" style="line-height: 0.3;">
                                    <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                                    <p class="mt-1" style="font-family: 'Times New Roman', Times, serif;">City of
                                        Caloocan</p>
                                    <p style="font-family: 'Times New Roman', Times, serif;">Barangay
                                        158 Zone 16 District 3</p>
                                    <p style="font-family: 'Times New Roman', Times, serif;">Mobile No.
                                        : </p>
                                </div>
                                <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle"
                                    height="80" />
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-3 text-center pt-2"
                                    style="border-right: solid 1px #000; line-height: 1;">
                                    <p class="fw-bold">SANGUNIANG <br /> BARANGAY 185</p>

                                    <p class="fw-semibold mt-3" style="font-size: 13px;">HON. RODOLFO
                                        "ATO" D. OLIVA <br /> <small class="fw-normal">Punong
                                            Barangay</small>
                                    </p>

                                    <p class="fw-semibold mt-5" style="font-size: 13px;">NANCY E.
                                        MARCELINO <br /> <small class="fw-normal">Barangay
                                            Secretary</small>
                                    </p>

                                    <p class="fw-semibold mt-5" style="font-size: 13px;">ROSALINA TIGLAO
                                        <br /> <small class="fw-normal">Barangay Treasurer</small>
                                    </p>

                                    <br /><br /><br /><br /><br />

                                    <small style="font-size: 13px;">Barangay 185 Council
                                        (Kagawads)</small><br /><br /><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. MARIVIC H.
                                        GALIT</p><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. JUAN ESPAYOS JR
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. MELVIN ESPAYOS
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. EMILY CAMMAYO
                                    </p><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. MANOLITO
                                        BAOILAN</p><br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. VICTOR DIAZ</p>
                                    <br />
                                    <p class="fw-semibold" style="font-size: 13px;">HON. GRACE LAMPA</p>

                                    <br /><br /><br />

                                    <p class="fw-semibold" style="font-size: 13px;">AIRA GRACE O.
                                        CAPUCHINO <br /> <small class="fw-normal">Barangay
                                            Administrator</small>
                                    </p>

                                    <p class="fw-semibold" style="font-size: 13px;">LUPON TAGAPAMAYAPA
                                        <br /> <small class="fw-normal">Summon Officer</small>
                                    </p>

                                    <p class="fw-semibold" style="font-size: 13px;">MARIO BODEÑA <br />
                                        <small class="fw-normal">Barangay Ex-Officio</small>
                                    </p> <br /><br />

                                </div>
                                <div class="col-9 z-3">
                                    <div class="text-center mt-4" style="line-height: 0.3;">
                                        <h5 class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">
                                            BARANGAY INDIGENCY
                                        </h5>
                                        <p style="font-family: 'Times New Roman', Times, serif;">Control
                                            No. :</p>
                                    </div>
                                    <div class="position-relative w-75 z-n1 mt-5 mx-3">
                                        <img src="application/public/logo.png" alt="bglogo"
                                            class="rounded-circle w-100 opacity-25 position-absolute mx-5"/>
                                    </div>
                                    <div class="px-3 text-justify z-3"
                                        style="font-size: 13px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem;">

                                        This is to certify that,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 15rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="displayName" readonly>,
                                        is a bonafide resident of this barangay, presently residing at
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 25rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="displayAddress"
                                            readonly>,
                                        who belongs to the <strong
                                            style="font-family: 'Times New Roman', Times, serif;">INDIGENT
                                            FAMILY</strong> with low family income / No permanent job.
                                        <br /> <br />
                                        This certification is being issued upon request of the
                                        above-mentioned named to seek
                                        <strong style="font-family: 'Times New Roman', Times, serif;">FINANCIAL
                                            ASSISTANCE</strong> for his wife,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 15rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="displayWifeName"
                                            readonly>.
                                        <br /> <br />

                                        Given on this
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 2rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="day" readonly>
                                        <sup id="suffix"></sup>
                                        day of
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="month" readonly>
                                        in the year of our Lord,
                                        <input type="text"
                                            style="border: none; border-bottom: 1px solid #000; width: 5rem; font-size: 13px; font-family: 'Times New Roman', Times, serif;"
                                            class="fw-semibold text-capitalize text-center bg-transparent" id="year" readonly>
                                        at the office of Barangay 185, District 3, Malaria, Caloocan
                                        City.
                                    </div>

                                    <div class="container-fluid mt-5">
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-center align-items-center mt-5">
                                                <p class="text-center"
                                                    style="font-size: 12px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        LETICIO GRACIANO</strong> <br />
                                                    Punong Barangay
                                                </p>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class="text-center"
                                                    style="font-size: 12px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        CECILIO ABORGOCIO</strong> <br />
                                                    Barangay Kagawad On Duty
                                                </p>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center align-items-center border border-dark p-3 mt-5"
                                                style="font-size: 12px; font-family: 'Times New Roman', Times, serif;">
                                                *NOT VALID FOR 6 (SIX) MONTHS FROM THE DATE OF ISSUANCE
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
                <button type="submit" class="btn btn-success" onclick="printModalContent()">Print</button>
            </div>
        </div>
    </div>
</div>