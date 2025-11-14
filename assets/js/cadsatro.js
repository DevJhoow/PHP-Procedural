
    setTimeout(() => {
        const msg = document.getElementById('msg-sucesso');
        if (msg) {
            msg.style.transition = "opacity 0.5s";
            msg.style.opacity = "0";
            
            setTimeout(() => msg.remove(), 500); // remove da tela
        }
    }, 3000); // 3 segundos

