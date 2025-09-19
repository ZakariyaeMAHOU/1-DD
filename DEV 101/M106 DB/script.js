// جلب ملف Markdown وعرضه على الصفحة
fetch("M106_Bases de Données.md")
    .then(response => response.text()) // تحويل الاستجابة إلى نص
    .then(markdown => {
        document.getElementById("content").innerHTML = marked.parse(markdown); // تحويل Markdown إلى HTML
    })
    .catch(error => {
        console.error("خطأ في تحميل الملف:", error);
        document.getElementById("content").innerText = "تعذر تحميل الملف.";
    });
