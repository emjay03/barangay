// Function to get and increment the control number
function clearancegenerateControlNumber() {
    const currentYear = new Date().getFullYear();
    let lastControlNumber = localStorage.getItem("lastControlNumber");

    // If no control number is stored, start from 1
    if (!lastControlNumber) {
        lastControlNumber = 1;
    } else {
        // Increment the last control number
        lastControlNumber = parseInt(lastControlNumber, 10) + 1;
    }

    // Format the control number with padding (e.g., 2024-00001)
    const formattedControlNumber = `${currentYear}-${String(lastControlNumber).padStart(5, '0')}`;

    // Store the updated control number for future use
    localStorage.setItem("lastControlNumber", lastControlNumber);

    return formattedControlNumber;
}

function updateDisplayClearance() {
    // Get values from the input fields
    const fullName = document.getElementById("clearanceFullName").value;
    const birthdate = document.getElementById("clearanceBirthdate").value;
    const birthplace = document.getElementById("clearanceBirthplace").value;
    const address = document.getElementById("clearanceAddress").value;
    const findings = document.getElementById("clearanceFindings").value;
    const purpose = document.getElementById("clearancePurpose").value;

    // Get the generated control number
    const clearancecontrolNo = clearancegenerateControlNumber();
    
    // Update the control number display field
    document.getElementById('clearancecontrolNo').innerText = clearancecontrolNo;

    // Update the display in the modal
    document.getElementById("clearanceDisplayName").value = fullName;
    document.getElementById("clearanceDisplayBirthdate").value = birthdate;
    document.getElementById("clearanceDisplayBirthplace").value = birthplace;
    document.getElementById("clearanceDisplayAddress").value = address;
    document.getElementById("clearanceDisplayFinding").value = findings;
    document.getElementById("clearanceDisplayPurpose").value = purpose;
    document.getElementById("clearanceSignature").value = fullName;
}

function printModalContentClearance() {
    const { jsPDF } = window.jspdf;

    // Get the current values from the input fields
    const controlNo = document.getElementById("clearancecontrolNo").innerText;
    const fullName = document.getElementById("clearanceDisplayName").value;
    const birthdate = document.getElementById("clearanceDisplayBirthdate").value;
    const birthplace = document.getElementById("clearanceDisplayBirthplace").value;
    const address = document.getElementById("clearanceDisplayAddress").value;
    const findings = document.getElementById("clearanceDisplayFinding").value; // corrected
    const purpose = document.getElementById("clearanceDisplayPurpose").value; // corrected

    // Create the content for the PDF
    const modalContent = `
        <div class="header">
            <div class="d-flex justify-content-between align-items-center py-2 px-5" style="border-bottom: solid 3px #000;">
                <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                <div class="d-block text-center" style="line-height: 0.3;">
                    <img src="application/public/rp.png" alt="logo3" width="300" />
                    <p class="mt-2 fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of Caloocan</p>
                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Barangay 158 Zone 16 District 3</p>
                    <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Mobile No.: 0921-9662901</p>
                </div>
                <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle" height="80" />
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

                                    <br /><br />
                                </div>
                <div class="col-9 z-3">
                    <div class="text-center mt-5" style="line-height: 0.3;">
                        <h5 class="fw-bold fs-3 tracking-widest" style="font-family: 'Times New Roman', Times, serif;">BARANGAY CLEARANCE</h5>
                        <p class="fw-bold" style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Control No. : ${controlNo}</p>
                    </div>
                    <div class="position-relative w-75 z-n1 mt-5 mx-3">
                        <img src="application/public/logo.png" alt="bglogo" class="rounded-circle w-100 position-absolute mx-5" style="opacity: 0.2;" />
                    </div>
                    <div class="px-3 text-justify z-3" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem; line-height: 1.5">
                        <span style="margin-left: 5rem; font-size: 17px;"></span>This is to certify that,
                        <strong class="text-capitalize" style=" font-size: 17px;">${fullName}</strong>
                        is a <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BONAFIDE RESIDENT</span> of <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">BARANGAY 185 ZONE 16 DISTRICT 3</span>
                        who was born on <strong class="text-capitalize" style=" font-size: 17px;">${birthdate}</strong> at <strong class="text-capitalize" style=" font-size: 17px;">${birthplace}</strong> presently residing at
                        <strong class="text-capitalize" style=" font-size: 17px;">${address}</strong> and signature appears hereon has undergone
                        <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">RECORD CHECK</span> from the office and the result is indicated as follows.
                        <br /><br />

                        <div class="row">
                            <div class="col-5">
                                <div class="d-flex">
                                    <div class="leftThumb">
                                        <div class="me-3 border border-dark border-3" style="height: 90px; width: 90px;"></div>
                                        <small style="font-size: 10px; font-family: 'Times New Roman', Times, serif;">Left Thumb Mark</small>
                                    </div>
                                    <div class="rightThumb">
                                        <div class="me-2 border border-dark border-3" style="height: 90px; width: 90px;"></div>
                                        <small style="font-size: 10px; font-family: 'Times New Roman', Times, serif;">Right Thumb Mark</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 fw-bold" style="font-size: 18px; font-family: 'Times New Roman', Times, serif;">
                                FINDINGS:
                                <strong class="text-capitalize" style=" font-size: 17px;">${findings}</strong> <br />
                                PURPOSE:  
                                <strong class="text-capitalize" style=" font-size: 17px;">${purpose}</strong>
                            </div>
                        </div> <br />
                        <strong class="text-capitalize" style=" font-size: 17px; border-bottom: 2px solid #000">${fullName}</strong> <br />
                        Signature-over Printed name
                    </div>

                    <div class="container-fluid" style="margin-top: 3rem;">
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
                                    <strong style="font-family: 'Times New Roman', Times, serif;">HON. ENGRACIA T. LAMPA</strong><br />
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
    `;

    const pdf = new jsPDF("p", "pt", "a4");

    // Add content to the PDF
    pdf.html(modalContent, {
        callback: function (doc) {
            // Save the PDF
            doc.save("barangay_clearance.pdf");
        },
        x: 10,
        y: 10,
    });

    const printWindow = window.open("", "", "height=800,width=1000");
    printWindow.document.write("<html><head><title>Print Indigency</title>");
	printWindow.document.write("<style>");
	printWindow.document.write(
		'body { font-family: "Times New Roman", Times, serif; margin: 20px; }'
	);
	printWindow.document.write("</style>");
	printWindow.document.write(
		'<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">'
	);
	printWindow.document.write("</head><body>");
    printWindow.document.write(modalContent); // Include the newly constructed content
    printWindow.document.write("</body></html>");
    printWindow.document.close();
    printWindow.print();
}
