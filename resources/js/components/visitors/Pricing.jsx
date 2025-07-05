import ReactDOM from "react-dom/client";
import React from "react";
import { CheckCircle2 } from "lucide-react";

const pricingPlans = [
  {
    id: 1,
    title: "Basic Plan",
    price: "₦10,000",
    description: "Perfect for one-time events with standard features.",
    features: [
      "Personalized wedding page",
      "Event details & RSVP collection",
      "Custom link",
      "Link expires 3 days after the wedding",
    ],
    buttonLabel: "Choose Basic",
    href: "/register?plan=basic",
  },
  {
    id: 2,
    title: "Premium Plan",
    price: "₦15,000",
    description: "Ideal for couples who want extended gallery access.",
    features: [
      "Everything in Basic Plan",
      "Photo gallery backup for 2 months",
      "Downloadable invites & event cards",
      "Map directions & schedule",
    ],
    buttonLabel: "Choose Premium",
    href: "/register?plan=premium",
  },
];

const PricingSection = () => {
  return (
    <section className="py-20 px-4 bg-gray-50 dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold mb-4 text-gray-800 dark:text-white">
        Affordable One-Time Pricing
      </h2>

      <p className="text-gray-600 dark:text-gray-300 mb-12 max-w-xl mx-auto">
        Choose the plan that best fits your wedding needs. Simple, transparent, and no hidden fees.
      </p>

      <div className="flex flex-col md:flex-row gap-8 justify-center max-w-6xl mx-auto">
        {pricingPlans.map((plan) => (
          <div
            key={plan.id}
            className="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 flex flex-col justify-between w-full md:w-1/2"
          >
            <h3 className="text-xl font-semibold text-gray-800 dark:text-white mb-2">
              {plan.title}
            </h3>

            <p className="text-3xl font-bold text-gray-900 dark:text-white mb-2">
              {plan.price}
            </p>

            <p className="text-gray-600 dark:text-gray-300 mb-6 text-sm">
              {plan.description}
            </p>

            <hr className="border-gray-200 dark:border-gray-700 mb-4" />

            <ul className="text-left space-y-3 mb-6">
              {plan.features.map((feature, index) => (
                <li key={index} className="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                  <CheckCircle2 className="text-rose-500 dark:text-yellow-400 mr-2 mt-1" size={18} />
                  <span>{feature}</span>
                </li>
              ))}
            </ul>

            <a
              href={plan.href}
              className="inline-block bg-black text-white text-sm font-semibold py-3 px-6 rounded-full hover:bg-gray-800 transition"
            >
              {plan.buttonLabel}
            </a>
          </div>
        ))}
      </div>
    </section>
  );
};

export default PricingSection;

if (document.getElementById("pricing")) {
  const Index = ReactDOM.createRoot(document.getElementById("pricing"));
  Index.render(
    <React.StrictMode>
      <PricingSection />
    </React.StrictMode>
  );
}
