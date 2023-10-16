$(document).ready(function () {
    const form = $("#jobForm");    
    const responseDiv = $("#response");
    const errorDiv = $("#error");
    let errorDisplayed = false;

    form.on("submit", function (event) {
        event.preventDefault();
        const jobData = {
            job_title: $("#job_title").val(),
            job_description: $("#job_description").val(),
            job_est_hours: $("#job_est_hours").val(),
            entry_date: $("#entry_date").val(),
            schedule_start_date: $("#schedule_start_date").val(),
            schedule_end_date: $("#schedule_end_date").val(),
        };

        const errorMessage = (message) => {
            if (!errorDisplayed) {
                const error = $(`<div id="error" class="alert alert-danger">${message}</div>`);
                errorDiv.append(error);
                errorDisplayed = true;
            }
        };

        const showErrorAndStop = (message) => {
            errorMessage(message);
            return false;
        };

        if (!jobData.job_title) {
            return showErrorAndStop("Error: Job Title is required.");
        } else {
            if (errorDisplayed) {                
                errorDiv.empty();
                errorDisplayed = false;
            }
        }

        if (!jobData.entry_date) {
            return showErrorAndStop("Error: Entry Date is required.");
        }else {
            if (errorDisplayed) {                
                errorDiv.empty();
                errorDisplayed = false;
            }
        }

        const startDate = new Date(jobData.schedule_start_date);
        const endDate = new Date(jobData.schedule_end_date);

        if (startDate > endDate) {
            return showErrorAndStop("Error: Schedule Start Date cannot be after Schedule End Date.");
        }

        $.ajax({
            type: "POST",
            url: "index.php",
            data: jobData,
            dataType: "json",
            success: function (response) {
                if (errorDisplayed) {                    
                    responseDiv.empty();
                    errorDisplayed = false;
                }
                const jsonResponse = JSON.stringify(response, null, 2);
                responseDiv.html("<pre>" + jsonResponse + "</pre>");
            },
            error: function () {
                responseDiv.html("Error: Failed to add the job.");
            },
        });
    });
});
