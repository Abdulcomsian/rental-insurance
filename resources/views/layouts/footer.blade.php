<!-- <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
         <div class="text-dark order-2 order-md-1">
             <span class="text-muted fw-bold me-1">2021©</span>
             <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Callidus Mena IT Team</a>
        </div>
    </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(".nextBtn").click(function() {
        if ($(".basicInfo").css("display") == "block") {
            $(".basicInfo").css("display", "none")
            $(".board-of-diector").css("display", "block")
        } else if ($(".board-of-diector").css("display") == "block") {
            $(".board-of-diector").css("display", "none")
            $(".accounting").css("display", "block")
        } else if ($(".accounting").css("display") == "block") {
            $(".accounting").css("display", "none")
            $(".market-share").css("display", "block")
            $(".nextBtn").css("display", "none")
        }
    })
</script>

<script>
    $(document).ready(function() {
        $('#ListCountry').select2();
    });
</script>

<script>
    let sectionsAdded = 0;
    let describeSectionAdded = false;
    let describeSection = "";
    const btnAnotherNameEl = document.querySelector(".add");
    $(document).ready(function() {
        $(".add").click(function() {
            let clonedSection = $(".Qualification-section").first().clone();

            clonedSection.find(".Action-icon").removeClass("d-none");
            $(".AddQualification").append(clonedSection);
            sectionsAdded++;
        });
    });

    function dltSection(e) {
        console.log(e);
        $(e.target).closest(".Qualification-section").remove();
        sectionsAdded--; // Decrement the count of sections
        // console.log(sectionsAdded)
        // if (sectionsAdded === 0) {
        //     describeSection = “”
        //         $(“.more - language”).html(describeSection);
        //     describeSectionAdded = true;
        // }
    }
</script>