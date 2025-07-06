import ReactDOM from "react-dom/client";
import React, { useState } from 'react';

const ContactForm = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: '',
    message: '',
    file: null,
  });

  const [submitted, setSubmitted] = useState(false);

  const handleChange = (e) => {
    const { name, value, files } = e.target;
    if (name === 'file') {
      setFormData({ ...formData, file: files[0] });
    } else {
      setFormData({ ...formData, [name]: value });
    }
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // You can send this formData to your API here
    console.log(formData);

    // Simulate successful submission
    setSubmitted(true);

    // Reset form (optional)
    setFormData({
      name: '',
      email: '',
      subject: '',
      message: '',
      file: null,
    });
  };

  return (
    <section className="py-20 px-4 bg-gray-100 dark:bg-gray-900 text-center">
      <div className="max-w-2xl mx-auto">

        <h2 className="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">
          Get In Touch
        </h2>
        <p className="text-gray-600 dark:text-gray-300 mb-8">
          We'd love to hear from you. Fill out the form below and we'll respond within 24 hours.
        </p>

        {submitted ? (
          <div className="bg-green-100 text-green-700 rounded-lg p-4">
            ✅ Thanks! We’ll get back to you within 24 hours.
          </div>
        ) : (
          <form onSubmit={handleSubmit} className="space-y-4 text-left">

            <div>
              <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Name</label>
              <input
                type="text"
                name="name"
                value={formData.name}
                onChange={handleChange}
                required
                className="w-full border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 bg-white dark:bg-gray-800 dark:text-white"
              />
            </div>

            <div>
              <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                required
                className="w-full border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 bg-white dark:bg-gray-800 dark:text-white"
              />
            </div>

            <div>
              <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Subject</label>
              <select
                name="subject"
                value={formData.subject}
                onChange={handleChange}
                required
                className="w-full border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 bg-white dark:bg-gray-800 dark:text-white"
              >
                <option value="">Select a subject</option>
                <option value="Technical Issue">Technical Issue</option>
                <option value="Payment">Payment</option>
                <option value="General Inquiry">General Inquiry</option>
              </select>
            </div>

            <div>
              <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Message</label>
              <textarea
                name="message"
                value={formData.message}
                onChange={handleChange}
                required
                rows="4"
                className="w-full border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 bg-white dark:bg-gray-800 dark:text-white"
              />
            </div>

            <div>
              <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Optional File (Screenshot)</label>
              <input
                type="file"
                name="file"
                onChange={handleChange}
                className="w-full text-sm text-gray-600 dark:text-gray-300"
              />
            </div>

            <button
              type="submit"
              className="bg-black text-white rounded-full px-6 py-3 text-sm font-semibold hover:bg-gray-800 transition w-full"
            >
              Send Message
            </button>

          </form>
        )}

      </div>
    </section>
  );
};

export default ContactForm;

if (document.getElementById("contact")) {
  const Index = ReactDOM.createRoot(document.getElementById("contact"));
  Index.render(
    <React.StrictMode>
      <ContactForm />
    </React.StrictMode>
  );
}
