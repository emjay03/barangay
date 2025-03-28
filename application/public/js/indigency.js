// Function to get and increment the control number
function generateControlNumber() {
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

// Function to update display based on form input
document.addEventListener("DOMContentLoaded", updateDisplayIndigency);

function updateDisplayIndigency() {
    // Get the input values from the form
    const fullName = document.getElementById('indigencyFullname').value;
    const address = document.getElementById('indigencyAddress').value;
    const purpose = document.getElementById('indigencyPurpose').value;
    const dateInput = new Date(document.getElementById('indigencyDateInput').value);

    // Get the generated control number
    const controlNo = generateControlNumber();
    
    // Update the control number display field
    document.getElementById('controlNo').innerText = controlNo;

    // Update the print content display fields
    document.getElementById('indigencyDisplayName').value = fullName;
    document.getElementById('indigencyDisplayAddress').value = address;
    document.getElementById('indigencyDisplayPurpose').value = purpose;

    // Format the date properly
    if (!isNaN(dateInput)) {
        formatDateIndigency(dateInput);
    }
}

// Format the date properly
function formatDateIndigency(date) {
    const day = date.getDate();
    const month = date.toLocaleString("default", { month: "long" });
    const year = date.getFullYear();

    // Determine the suffix for the day
    const suffix = day % 10 === 1 && day !== 11 ? "st" :
                   day % 10 === 2 && day !== 12 ? "nd" :
                   day % 10 === 3 && day !== 13 ? "rd" : "th";

    // Set the values in the corresponding input fields
    document.getElementById("indigencyDay").value = day;
    document.getElementById("indigencySuffix").innerText = suffix;
    document.getElementById("indigencyMonth").value = month;
    document.getElementById("indigencyYear").value = year;
}

// Function to print modal content to PDF
function printModalContent() {
    const { jsPDF } = window.jspdf;

    // Get the current values from the input fields
    const controlNo = document.getElementById("controlNo").innerText;
    const fullname = document.getElementById("indigencyDisplayName").value;
    const purpose = document.getElementById("indigencyDisplayPurpose").value;
    const address = document.getElementById("indigencyDisplayAddress").value;
    const day = document.getElementById("indigencyDay").value;
    const suffix = document.getElementById("indigencySuffix").innerText;
    const month = document.getElementById("indigencyMonth").value;
    const year = document.getElementById("indigencyYear").value;
    // Create the content for the PDF
    const modalContent = `
        <div>
            <div class="header">
                <div class="d-flex justify-content-between align-items-center py-2 px-5" style="border-bottom: solid 3px #000;">
                    <img src="application/public/logo.png" alt="logo1" class="rounded-circle" height="80" />
                    <div class="d-block text-center" style="line-height: 0.3;">
                        <img src="application/public/rp.png" alt="logo3" class="" width="300" />
                        <p class="mt-2 fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">City of Caloocan</p>
                        <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Barangay 158 Zone 16 District 3</p>
                        <p class="fw-bold" style="font-family: 'Times New Roman', Times, serif;">Mobile No. : 0921-9662901</p>
                    </div>
                    <img src="application/public/northcaloocan_logo.png" alt="logo2" class="rounded-circle" height="80" />
                </div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-3 text-center pt-2 text-justify jus fs-5" style="border-right: solid 1px #000; line-height: 1;">
                        <p class="fw-bold text-break">SANGUNIANG BARANGAY 185</p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">HON. RODOLFO D. OLIVA <br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Punong Barangay</small></p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ROSALINA V. TIGLAO <br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Treasurer</small></p>
                        <p class="fw-bolder mt-5 lh-sm" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">NANCY E. MARCELINO <br /><small class="fw-normal" style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Secretary</small></p>
                        <br /><br /><br /><br /><br />
                        <small style="font-size: 13px; font-family: 'Times New Roman', Times, serif;">Kagawad:</small><br /><br /><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MARIVIC GALIT HSIEH</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">JUAN J. ESPAYOS JR</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MELVIN F. ESPAYOS</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">CONCEPCION T. CAMMAYO</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">MANOLITO N. BAOILAN</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">VICTOR C. DIAZ</p><br />
                        <p class="fw-semibold" style="font-size: 14px; font-family: 'Times New Roman', Times, serif;">ENGRACIA T. LAMPA</p>
                        <br /><br />
                    </div>
                    <div class="col-9">
                        <div class="text-center mt-5" style="line-height: 0.3;">
                            <h5 class="fw-bold fs-3 tracking-widest" style="font-family: 'Times New Roman', Times, serif;">BARANGAY INDIGENCY</h5>
                            <p class="fw-bold" style="font-size: 15px; font-family: 'Times New Roman', Times, serif;">Control No. : ${controlNo}</p>
                        </div>
                        <div class="position-relative w-75 z-n1 mt-5 mx-3">
                            <img src="application/public/logo.png" alt="bglogo" class="w-100 position-absolute mx-5" style="opacity: 0.2;"/>
                        </div>
                        <div class="px-3 text-justify z-3" style="font-size: 17px; font-family: 'Times New Roman', Times, serif; margin-top: 5rem; line-height: 1.5">
                            <span style="margin-left: 5rem; font-size: 17px;"></span>This is to certify that,
                            <strong class="text-capitalize" style="font-size: 17px;">${fullname}</strong>, is a bonafide resident of this barangay, presently residing at
                            <strong class="text-capitalize" style="font-size: 17px;">${address}</strong>, who belongs to the 
                            <strong style="font-family: 'Times New Roman', Times, serif;">INDIGENT FAMILY</strong> with low average Family Income / no Permanent Job.
                            <br /><br />
                            <span style="margin-left: 5rem;"></span>This certification is being issued upon the request of the above-mentioned named to comply 
                            <strong class="text-capitalize" style="font-size: 17px;">${purpose}</strong>.
                            <br /><br />
                            Given on this <strong class="text-capitalize" style="font-size: 17px;">${day}</strong> <strong style="font-size: 17px;"><sup>${suffix}</sup></strong> day of
                            <strong class="text-capitalize" style="font-size: 17px;">${month}</strong> in the year of our Lord,
                            <strong class="text-capitalize" style="font-size: 17px;">${year}</strong> at the office of <span class="fw-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">Office of Barangay 185 Zone 16 District 3, Malaria, City of Caloocan.</span>
                        </div>
                        <div class="container-fluid" style="margin-top: 6rem;">
                            <div class="row">
                                <div class="col-6 mt-5">
                                                <img src="application/public/signature1.png" alt="" height="65" class="pb-2 top-0 mx-2" style="border-bottom: solid 2px #000;">
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
    `;

    const printWindow = window.open("", "", "height=800,width=1000");

    // Create a new jsPDF instance
    const pdf = new jsPDF("p", "pt", "a4");

    // Add content to the PDF
    pdf.html(modalContent, {
        callback: function (doc) {
            // Save the PDF
            doc.save("indigency.pdf");
        },
        x: 10,
        y: 10,
    });

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
