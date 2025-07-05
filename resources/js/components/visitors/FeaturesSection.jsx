import ReactDOM from 'react-dom/client';
import React from 'react';
import {
  ImageIcon,
  CalendarClock,
  GalleryHorizontalEnd,
  MapPin,
  Inbox,
  Link2Icon,
} from 'lucide-react';

const features = [
  {
    id: 1,
    title: "Wedding Card Generator",
    icon: <ImageIcon size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Create and download personalized invites in PDF or digital format.",
  },
  {
    id: 2,
    title: "Event Schedule",
    icon: <CalendarClock size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Let guests know what’s happening and when.",
  },
  {
    id: 3,
    title: "Photo Gallery",
    icon: <GalleryHorizontalEnd size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Upload and share your engagement or pre-wedding photos.",
  },
  {
    id: 4,
    title: "Venue Map & Directions",
    icon: <MapPin size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Help your guests easily locate your wedding venue.",
  },
  {
    id: 5,
    title: "RSVP Tracking",
    icon: <Inbox size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Collect and manage guest responses in one place.",
  },
  {
    id: 6,
    title: "Custom URL",
    icon: <Link2Icon size={36} className="text-pink-600 dark:text-yellow-400" />,
    description: "Get a personalized link like /weddings/jane-and-emeka.",
  },
];

const FeaturesSection = () => {
  return (
    <div className="py-16 px-4 bg-gray-50 dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold mb-12 text-gray-800 dark:text-white">Our Features</h2>

      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        {features.map((feature) => (
          <div
            key={feature.id}
            className="flex flex-col items-center justify-start p-6 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 h-64"
          >
            <div className="mb-4">{feature.icon}</div>
            <h3 className="font-semibold text-gray-900 dark:text-white text-base mb-2 text-center">
              {feature.title}
            </h3>
            <p className="text-gray-600 dark:text-gray-300 text-sm text-center">
              {feature.description}
            </p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default FeaturesSection;

if (document.getElementById('featuresection')) {
    const Index = ReactDOM.createRoot(document.getElementById('featuresection'));

    Index.render(
        <React.StrictMode>
            <FeaturesSection />
        </React.StrictMode>
    );
}
