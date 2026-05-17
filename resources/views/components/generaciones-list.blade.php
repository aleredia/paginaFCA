<div class="generaciones-section-wrapper py-5 my-5">
    <div class="container-fluid px-lg-5">
        
        <div class="calarts-list-container position-relative">
            
            {{ $slot }}

            <div id="calarts-hover-preview" class="hover-preview-box"></div>

        </div>
        
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll(".calarts-row");
    const previewBox = document.getElementById("calarts-hover-preview");

    if (rows.length > 0 && previewBox) {
        rows.forEach(row => {
            row.addEventListener("mouseenter", function (e) {
                const imageUrl = this.getAttribute("data-image");
                previewBox.style.left = e.clientX + "px";
                previewBox.style.top = e.clientY + "px";
                previewBox.style.backgroundImage = `url('${imageUrl}')`;
                previewBox.classList.add("visible");
            });

            row.addEventListener("mouseleave", function () {
                previewBox.classList.remove("visible");
            });
        });
    }
});
</script>