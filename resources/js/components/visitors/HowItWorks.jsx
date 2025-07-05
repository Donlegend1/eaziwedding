import ReactDOM from "react-dom/client";
import React from 'react';
import { UserPlus, Sliders, Share2, Download, MapPinHouse, BookHeartIcon } from 'lucide-react';

const steps = [
  {
    id: 1,
    title: "Create an Account & Choose a Plan",
    icon: <UserPlus size={40} />,
    description: "Sign up in minutes and pick the perfect plan for your dream wedding experience.",
  },
  {
    id: 2,
    title: "Customize Your Wedding Page",
    icon: <Sliders size={40} />,
    description: "Personalize your unique wedding website with photos, stories, and event details.",
  },
  {
    id: 3,
    title: "Share Your Unique Wedding Link",
    icon: <Share2 size={40} />,
    description: "Easily share your wedding page with friends and family to keep everyone informed.",
  },
  {
    id: 4,
    title: "Download Invites or Collect RSVPs",
    icon: <Download size={40} />,
    description: "Send beautiful digital invites and manage RSVPs effortlessly online as well as generate PDF invites that can be sent manually.",
  },
  {
    id: 5,
    title: "Map Direction",
    icon: <MapPinHouse size={40} />,
    description: "Wedding link comes with a map direction to the event center.",
  },
  {
    id: 6,
    title: "Event Card",
    icon: <BookHeartIcon size={40} />,
    description: "Events of the day can be generated as a downloadable PDF.",
  },
];

const HowItWorks = () => {
  return (
    <div className="py-16 px-4 bg-white dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold mb-12 text-gray-800 dark:text-white">How It Works</h2>

      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        {steps.map((step) => (
          <div
            key={step.id}
            className="flex flex-col items-center justify-start p-6 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 h-64"
          >
            <div className="mb-3 text-rose-500 dark:text-yellow-400">{step.icon}</div>
            <h3 className="font-semibold text-gray-900 dark:text-white text-base mb-2 text-center">
              {step.title}
            </h3>
            <p className="text-gray-600 dark:text-gray-300 text-sm text-center">
              {step.description}
            </p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default HowItWorks;


if (document.getElementById("howitworks")) {
    const Index = ReactDOM.createRoot(document.getElementById("howitworks"));
    Index.render(
        <React.StrictMode>
            <HowItWorks />
        </React.StrictMode>
    );
}
