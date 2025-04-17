document.addEventListener("DOMContentLoaded", () => {
  // Find all service cards
  const serviceCards = document.querySelectorAll(".icon-box")

  serviceCards.forEach((card, index) => {
    // Get the icon element
    const iconElement = card.querySelector(".icon-circle i")
    const titleElement = card.querySelector(".icon-title")

    if (iconElement && titleElement) {
      // Get the icon class and title
      const iconClass = iconElement.className
      const title = titleElement.textContent.trim()

      // Create a download button
      const downloadBtn = document.createElement("a")
      downloadBtn.className = "download-icon-btn"
      downloadBtn.innerHTML = '<i class="fas fa-download"></i> Télécharger l\'icône'
      downloadBtn.style.display = "inline-flex"
      downloadBtn.style.alignItems = "center"
      downloadBtn.style.marginTop = "10px"
      downloadBtn.style.fontSize = "0.875rem"
      downloadBtn.style.color = "#000"
      downloadBtn.style.cursor = "pointer"

      // Add click event to generate and download the image
      downloadBtn.addEventListener("click", (e) => {
        e.preventDefault()

        // Create a canvas to draw the icon
        const canvas = document.createElement("canvas")
        canvas.width = 200
        canvas.height = 200
        const ctx = canvas.getContext("2d")

        // Fill background
        ctx.fillStyle = "#f9f9f9"
        ctx.fillRect(0, 0, canvas.width, canvas.height)

        // Draw circle
        ctx.fillStyle = "#ffffff"
        ctx.beginPath()
        ctx.arc(100, 100, 60, 0, Math.PI * 2)
        ctx.fill()
        ctx.strokeStyle = "#e5e5e5"
        ctx.lineWidth = 2
        ctx.stroke()

        // Draw icon (simplified representation)
        ctx.fillStyle = "#000000"
        ctx.font = 'bold 40px "Font Awesome 5 Free"'
        ctx.textAlign = "center"
        ctx.textBaseline = "middle"

        // Map Font Awesome icon classes to unicode characters
        // This is a simplified approach - in a real implementation you'd need a complete mapping
        const iconMap = {
          "fa-microchip": "\uf2db",
          "fa-globe": "\uf0ac",
          "fa-chart-line": "\uf201",
          "fa-robot": "\uf544",
          "fa-code": "\uf121",
          "fa-shield-alt": "\uf3ed",
          "fa-laptop": "\uf109",
          "fa-cog": "\uf013",
        }

        // Extract the icon name from the class
        const iconName = iconClass.split(" ").find((cls) => cls.startsWith("fa-"))
        const iconChar = iconMap[iconName] || "\uf013" // Default to cog if not found

        ctx.fillText(iconChar, 100, 100)

        // Add title at the bottom
        ctx.font = "bold 16px sans-serif"
        ctx.fillText(title, 100, 180)

        // Convert to image and download
        const dataUrl = canvas.toDataURL("image/png")
        const downloadLink = document.createElement("a")
        downloadLink.href = dataUrl
        downloadLink.download = `service-${title.toLowerCase().replace(/\s+/g, "-")}.png`
        document.body.appendChild(downloadLink)
        downloadLink.click()
        document.body.removeChild(downloadLink)
      })

      // Add the download button to the card
      card.appendChild(downloadBtn)
    }
  })
})
