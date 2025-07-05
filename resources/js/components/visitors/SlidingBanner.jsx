import ReactDOM from 'react-dom/client';
import React, { useState, useEffect } from 'react';
import { Box, Typography, Button } from '@mui/material';
import { motion, AnimatePresence } from 'framer-motion';

const slides = [
  {
    id: 1,
    title: "Create Unforgettable Wedding Moments",
    subtitle: "From breathtaking venues to seamless planning, we bring your dream wedding to life with elegance and charm.",
    cta: "Plan Your Wedding",
    backgroundImage: "/images/wedding3.jpg",
  },
  {
    id: 2,
    title: "Capture Every Magical Detail",
    subtitle: "Our expert photographers and videographers ensure that every precious moment is beautifully preserved forever.",
    cta: "View Our Gallery",
    backgroundImage: "/images/wedding4.jpg",
  },
  {
    id: 3,
    title: "Celebrate Love in Style",
    subtitle: "From intimate ceremonies to grand receptions, we craft bespoke wedding experiences tailored to your vision.",
    cta: "Start Your Journey",
    backgroundImage: "/images/wedding2.jpg",
  },
];

const SlidingBanner = () => {
  const [index, setIndex] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setIndex((prev) => (prev + 1) % slides.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  const currentSlide = slides[index];

  return (
    <Box className="w-full h-[80vh] relative overflow-hidden">
      {/* Background Image */}
      <Box
        sx={{
          position: 'absolute',
          inset: 0,
          zIndex: 1,
          width: '100%',
          height: '100%',
          overflow: 'hidden',
        }}
      >
      <img
        src={currentSlide.backgroundImage}
        alt="Banner"
        style={{
          width: '100%',
          height: '100%',
          objectFit: 'cover',      // Stretches or crops as needed
          objectPosition: 'top center', // You can try 'center center' or 'top'
        }}
      />
    </Box>

      {/* Dark Overlay */}
      <Box
        sx={{
          position: 'absolute',
          inset: 0,
          backgroundColor: 'rgba(0, 0, 0, 0.5)',
          zIndex: 2,
        }}
      />
      {/* Content */}
      <AnimatePresence mode="wait">
        <motion.div
          key={currentSlide.id}
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          exit={{ opacity: 0, y: -30 }}
          transition={{ duration: 0.8, ease: 'easeInOut' }}
          className="absolute w-full h-full flex flex-col items-center justify-center text-center px-4 z-30"
        >
          <Typography variant="h3" className="font-bold text-white mb-4 drop-shadow-lg">
            {currentSlide.title}
          </Typography>
          <Typography variant="h6" className="mb-6 text-gray-200 max-w-xl mx-auto drop-shadow">
            {currentSlide.subtitle}
          </Typography>
          <Box marginY={3}>
            <Button
            variant="contained"
            sx={{
              backgroundColor: '#000',
              color: '#fff',
              borderRadius: '30px',
              paddingX: 4,
              paddingY: 1.5,
              '&:hover': {
                backgroundColor: '#333',
              },
            }}
          >
            {currentSlide.cta}
          </Button>
          </Box>
        </motion.div>
      </AnimatePresence>
    </Box>
  );
};

export default SlidingBanner;

if (document.getElementById('slidingbanner')) {
    const Index = ReactDOM.createRoot(document.getElementById('slidingbanner'));

    Index.render(
        <React.StrictMode>
            <SlidingBanner />
        </React.StrictMode>
    );
}
