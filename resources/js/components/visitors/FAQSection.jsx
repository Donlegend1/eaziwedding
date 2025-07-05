import ReactDOM from "react-dom/client";
import React, { useState } from "react";

const faqs = [
  {
    question: "Can I edit my wedding page after publishing?",
    answer: "Yes, you can update your wedding details, photos, and information anytime—even after publishing—until the event date.",
  },
  {
    question: "Is payment one-time or monthly?",
    answer: "Our plans are a simple one-time payment with no recurring fees. Pay once and enjoy the features for your chosen duration.",
  },
  {
    question: "Can guests RSVP directly?",
    answer: "Absolutely! Your guests can RSVP directly through your personalized wedding page, and you can easily manage responses.",
  },
  {
    question: "What happens after the wedding?",
    answer: "For the Basic Plan, your link expires 3 days after your event. The Premium Plan keeps your gallery online for up to 2 months.",
  },
];

const FAQSection = () => {
  const [activeIndex, setActiveIndex] = useState(null);

  const toggleFAQ = (index) => {
    setActiveIndex(index === activeIndex ? null : index);
  };

  return (
    <section className="py-20 px-4 bg-white dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold text-gray-800 dark:text-white mb-10">
        Frequently Asked Questions
      </h2>

      <div className="max-w-3xl mx-auto text-left space-y-4">
        {faqs.map((faq, index) => (
          <div key={index} className="border border-gray-200 dark:border-gray-700 rounded-lg p-4">
            <button
              onClick={() => toggleFAQ(index)}
              className="flex justify-between items-center w-full text-left"
            >
              <span className="text-gray-800 dark:text-white font-medium">{faq.question}</span>
              <span className="text-gray-500 dark:text-gray-300 text-xl">
                {activeIndex === index ? "−" : "+"}
              </span>
            </button>
            {activeIndex === index && (
              <p className="mt-3 text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                {faq.answer}
              </p>
            )}
          </div>
        ))}
      </div>
    </section>
  );
};

export default FAQSection;

if (document.getElementById("faqs")) {
  const Index = ReactDOM.createRoot(document.getElementById("faqs"));
  Index.render(
    <React.StrictMode>
      <FAQSection />
    </React.StrictMode>
  );
}
