import ReactDOM from "react-dom/client";
import React from "react";

const FinalCTABanner = () => {
  return (
    <section className="py-16 px-4 bg-gradient-to-r from-pink-500 via-rose-500 to-pink-600 text-white text-center rounded-xl max-w-5xl mx-auto my-12 shadow-lg">
      <h2 className="text-3xl font-bold mb-4 leading-tight">
        Your perfect wedding deserves a perfect website
      </h2>
      <p className="text-lg mb-8 max-w-2xl mx-auto">
        Create a beautiful wedding page, share your special moments, and manage everything with ease.
      </p>
      <a
        href="/register"
        className="inline-block bg-black text-white font-semibold px-8 py-3 rounded-full hover:bg-gray-800 transition duration-300"
      >
        Create My Wedding Site
      </a>
    </section>
  );
};

export default FinalCTABanner;

if (document.getElementById("finalcta")) {
  const Index = ReactDOM.createRoot(document.getElementById("finalcta"));
  Index.render(
    <React.StrictMode>
      <FinalCTABanner />
    </React.StrictMode>
  );
}
