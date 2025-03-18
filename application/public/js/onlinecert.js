function printModalContentCertificate() {
    // Get the current values from the input fields
    const controlNo = document.getElementById('modal-controlnumber').innerHTML;
    const fullName = document.getElementById("modal-fullname").value;
    const address = document.getElementById("modal-address").value;
    const purpose = document.getElementById("modal-purpose").value;
    const day = document.getElementById("certificateDay").value;
    const suffix = document.getElementById("certificateSuffix").innerText;
    const month = document.getElementById("certificateMonth").value;
    const year = document.getElementById("certificateYear").value;

    // Generate the modal content based on the input values
    const modalContent = generateModalContent(controlNo, fullName, address, purpose, day, suffix, month, year);

    // Open a new window to display the content for printing
    const printWindow = window.open("", "", "height=800,width=1000");

    // Write the content into the new window
    printWindow.document.write("<html><head><title>Print Certificate</title>");
    printWindow.document.write("<style>");
    printWindow.document.write('body { font-family: "Times New Roman", Times, serif; margin: 20px; }');
    printWindow.document.write("</style>");
    printWindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
    printWindow.document.write("</head><body>");
    printWindow.document.write(modalContent); // Inject the modal content for printing
    printWindow.document.write("</body></html>");
    printWindow.document.close(); // Close the document stream to finalize the content

    // Trigger the print dialog
    printWindow.print();

    // Optionally, you can close the print window after printing (you can delay it if needed)
    printWindow.close();

    window.location.reload();
}


// Function to generate modal content based on the provided values
function generateModalContent(controlNo, fullName, address, purpose, day, suffix, month, year) {
    return `
        <div>
            <div class="header">
                <div class="d-flex justify-content-between align-items-center py-2 px-5" style="border-bottom: solid 3px #000;">
                    <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                    <div class="d-block text-center" style="line-height: 0.3;">
                        <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                        <p class="mt-2 fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of Caloocan</p>
                        <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Barangay 158 Zone 16 District 3</p>
                        <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Mobile No.: 0921-9662901</p>
                    </div>
                    <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle" height="80" />
                </div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-3 text-center pt-2 text-justify jus fs-5" style="border-right: solid 1px #000; line-height: 1;">
                        <p class="fw-bold text-break">SANGUNIANG BARANGAY 185</p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">HON. RODOLFO D. OLIVA <br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Punong Barangay</small></p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ROSALINA V. TIGLAO<br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Treasurer</small></p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">NANCY E. MARCELINO <br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Secretary</small></p>
                        <br /><br /><br /><br /><br />
                        <small style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Kagawad:</small><br /><br /><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MARIVIC GALIT HSIEH</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">JUAN J. ESPAYOS JR</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MELVIN F. ESPAYOS</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">CONCEPCION T. CAMMAYO</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MANOLITO N. BAOILAN</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">VICTOR C. DIAZ</p>
                        <br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ENGRACIA T. LAMPA</p>
                        <br /><br />
                    </div>
                    <div class="col-9">
                        <div class="text-center mt-5" style="line-height: 0.3;">
                            <h5 class="fw-bold fs-3 tracking-widest" style="font-family: 'Times New Roman', Times, serif;">BARANGAY CERTIFICATE</h5>
                            <p class="fw-bold" style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Control No. :  ${controlNo}</p>
                        </div>
                        <div class="position-relative w-75 z-n1 mt-5 mx-3">
                            <img src="application/public/logo.png" alt="bglogo" class="w-100 position-absolute mx-5" style="opacity: 0.2;"/>
                        </div>
                        <div class="px-3 text-justify z-3" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem; line-height: 1.5">
                            <span style="margin-left: 5rem; font-size: 17px;"></span>This is to certify that,
                            <strong class="text-capitalize" style="font-size: 17px;">${fullName}</strong>
                            is a <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BONAFIDE RESIDENT</span>
                            of <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BARANGAY 185 ZONE 16 DISTRICT 3</span>
                            presently residing at <strong id="certificateDisplayAddress" class="fw-semibold text-capitalize text-center bg-transparent" style="font-size: 18px;">${address}</strong> <br /><br /><br />
                            this Barangay Certificate is being issued for the following purposes:
                            <strong class="text-capitalize" style="font-size: 17px;">${purpose}</strong>
                            <br /><br /><br />
                            Given on this
                            <strong class="text-capitalize" style="font-size: 17px;">${day}</strong>
                            <strong style="font-size: 17px;"><sup>${suffix}</sup></strong>
                            day of
                            <strong class="text-capitalize" style="font-size: 17px;">${month}</strong>
                            in the year of our Lord,
                            <strong class="text-capitalize" style="font-size: 17px;">${year}</strong>
                            at the office of <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">Office of Barangay 185 Zone 16 District 3, Malaria, City of Caloocan.</span>
                        </div>
                        <div class="container-fluid" style="margin-top: 6rem;">
                            <div class="row">
                                <div class="col-6 mt-5">
                                                <img src="application/public/signature1.png" alt="" height="65"
                                                    class="pb-2 top-0 mx-2"
                                                    style="border-bottom: solid 2px #000; position-absolute">
                                                <p class="text-center"
                                                    style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                                    <strong style="font-family: 'Times New Roman', Times, serif;">
                                                        HON. RODOLFO D. OLIVA</strong> <br />
                                                    Punong Barangay
                                                </p>
                                            </div>
                                <div class="col-6 d-flex justify-content-center align-items-center">
                                    <p class="text-center" style="font-size: 17px; font-family: 'Times New Roman', Times, serif;">
                                        <strong style="font-family: 'Times New Roman', Times, serif;">HON. ENGRACIA T. LAMPA</strong> <br />
                                        Barangay Kagawad On Duty
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center align-items-center border border-dark p-4 text-capitalize fw-bold" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 4rem;">
                                    Note: Valid for Six (6) Months from the Date of Issuance
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function printCertificateContent() {
    const modalContent = generateModalContent(
        document.getElementById('modal-controlnumber').innerHTML,
        document.getElementById('modal-fullname').value,
        document.getElementById('modal-address').value,
        document.getElementById('modal-purpose').value,
        document.getElementById('certificateDay').value,
        document.getElementById('certificateSuffix').innerText,
        document.getElementById('certificateMonth').value,
        document.getElementById('certificateYear').value
    );

    const printWindow = window.open("", "", "height=800,width=1000");
    printWindow.document.write("<html><head><title>Print Certificate</title>");
    printWindow.document.write("<style>");
    printWindow.document.write('body { font-family: "Times New Roman", Times, serif; margin: 20px; }');
    printWindow.document.write("</style>");
    printWindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');
    printWindow.document.write("</head><body>");
    printWindow.document.write(modalContent); // Include the newly constructed content
    printWindow.document.write("</body></html>");
    printWindow.document.close();
    printWindow.print();
}
