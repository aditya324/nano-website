<form
    action="send-mail.php"
    method="POST"
    id="contactForm"

    enctype="multipart/form-data"
    class="space-y-4">
    <div>
        <label class="text-sm text-gray-600">Name *</label>
        <input
            type="text"
            name="name"
            placeholder="Enter Your Name"
            required
            class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm" />
    </div>

    <div>
        <label class="text-sm text-gray-600">Mobile Number *</label>
        <input
            type="tel"
            name="mobile"
            placeholder="Enter Your Mobile Number"
            required
            class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm" />
    </div>

    <div>
        <label class="text-sm text-gray-600">Email *</label>
        <input
            type="email"
            name="email"
            placeholder="Enter Your Email"
            required
            class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm" />
    </div>

    <div>
        <label class="text-sm text-gray-600">Message *</label>
        <textarea
            name="message"
            rows="2"
            required
            placeholder="Enter Your Message"
            class="w-full border-b border-gray-300 focus:outline-none focus:border-red-500 py-2 text-sm resize-none"></textarea>
    </div>

    <div>
        <label class="text-sm text-gray-600 block mb-1">
            Upload Reports
            <span class="text-xs text-gray-400">(optional – pdf, docx)</span>
        </label>

        <input
            type="file"
            name="report"
            accept=".pdf,.doc,.docx"
            class="block w-full text-sm text-gray-500
             file:mr-4 file:py-2 file:px-4
             file:rounded-full file:border-0
             file:text-sm file:font-medium
             file:bg-gray-200 file:text-gray-700
             hover:file:bg-gray-300" />
    </div>

    <button
        type="submit"
        class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-2.5 rounded-full transition">
        Submit
    </button>
</form>

<div
    id="toast"
    class="fixed top-6 left-1/2 -translate-x-1/2 z-50 hidden
         max-w-md w-full px-4">
    <div
        id="toastBox"
        class="bg-white border-l-4 shadow-lg rounded-lg p-4">
        <p id="toastMessage" class="text-sm font-medium text-center"></p>
    </div>
</div>




<script>
    const form = document.getElementById('contactForm');


    form.addEventListener('submit', async function(e) {
        e.preventDefault(); // ⛔ stop normal submit

        const formData = new FormData(form);

        try {

            const button = form.querySelector('button[type="submit"]');
            button.disabled = true;
            button.textContent = 'Sending...';
            const response = await fetch('send-mail.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            showToast(data.message, data.status);

            if (data.status === 'success') {
                form.reset();
                button.disabled = false;
                button.textContent = 'Submit';
            }

        } catch (error) {
            showToast('Something went wrong. Please try again.', 'error');
        }
    });
</script>


<script>
    function showToast(message, type) {
        const toast = document.getElementById('toast');
        const toastBox = document.getElementById('toastBox');
        const toastMessage = document.getElementById('toastMessage');

        toastMessage.textContent = message;

        toastBox.classList.remove(
            'border-green-500',
            'border-red-500'
        );

        toastMessage.classList.remove(
            'text-green-600',
            'text-red-600'
        );

        if (type === 'success') {
            toastBox.classList.add('border-green-500');
            toastMessage.classList.add('text-green-600');
        } else {
            toastBox.classList.add('border-red-500');
            toastMessage.classList.add('text-red-600');
        }

        toast.classList.remove('hidden');

        setTimeout(() => {
            toast.classList.add('hidden');
        }, 4000);
    }
</script>