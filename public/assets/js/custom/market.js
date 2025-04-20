function sendPushNotification(message) {
    alert(message);
}

function showOrderNotification() {
    const notificationMessage = "Order successful! Please pick up your item at the store.";
    sendPushNotification(notificationMessage);
}

window.onload = function() {
    const orderButtons = document.querySelectorAll(".orderButton");
    orderButtons.forEach(button => {
        button.addEventListener("click", showOrderNotification);
    });
};