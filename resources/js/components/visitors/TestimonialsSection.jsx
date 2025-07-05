import ReactDOM from "react-dom/client";
import React from "react";

const testimonials = [
  {
    id: 1,
    name: "Jane & Emeka",
    date: "April 22, 2024",
    quote: "Our wedding website made everything so simple and beautiful. Guests loved how easy it was to RSVP and find event details!",
    image: "/images/wedding1.jpg", // Replace with real photos
  },
  {
    id: 2,
    name: "Amaka & Tunde",
    date: "June 10, 2024",
    quote: "The custom link and invites were a game changer for us. We highly recommend this to every couple planning their big day.",
    image: "/images/wedding2.jpg",
  },
  {
    id: 3,
    name: "Zainab & Chuka",
    date: "August 5, 2024",
    quote: "It felt so personal and stress-free. We even got to keep our gallery memories online after the wedding!",
    image: "/images/wedding3.jpg",
  },
];

const TestimonialsSection = () => {
  return (
    <section className="py-20 px-4 bg-white dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold text-gray-800 dark:text-white mb-12">
        What Couples Are Saying
      </h2>

      <div className="flex flex-col md:flex-row gap-8 justify-center max-w-6xl mx-auto">
        {testimonials.map((testimonial) => (
          <div
            key={testimonial.id}
            className="bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center text-center max-w-xs mx-auto"
          >
            <img
              src={testimonial.image}
              alt={testimonial.name}
              className="w-20 h-20 rounded-full object-cover mb-4 border-4 border-white shadow"
            />
            <p className="text-gray-600 dark:text-gray-300 text-sm mb-4 italic leading-relaxed">
              “{testimonial.quote}”
            </p>
            <h4 className="text-gray-800 dark:text-white font-semibold text-base">
              {testimonial.name}
            </h4>
            <p className="text-gray-500 dark:text-gray-400 text-xs">{testimonial.date}</p>
          </div>
        ))}
      </div>
    </section>
  );
};

export default TestimonialsSection;

if (document.getElementById("testimonials")) {
  const Index = ReactDOM.createRoot(document.getElementById("testimonials"));
  Index.render(
    <React.StrictMode>
      <TestimonialsSection />
    </React.StrictMode>
  );
}
