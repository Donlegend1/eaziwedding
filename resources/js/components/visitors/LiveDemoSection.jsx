import ReactDOM from 'react-dom/client';
import React from 'react';
import { Box, Button } from '@mui/material';

const LiveDemoSection = () => {
  return (
    <section className="py-20 px-4 bg-white dark:bg-gray-900 text-center">
      <h2 className="text-3xl font-bold text-gray-800 dark:text-white mb-8">
        See It In Action
      </h2>

      <p className="text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed">
        Watch a quick walkthrough of how your personalized wedding website could look. It’s simple, beautiful, and easy to share with your loved ones.
      </p>

      <div className="max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-lg border border-gray-200 dark:border-gray-700">
        <video
          src="/videos/wedding-demo.mp4"   // Replace with your actual video path
          autoPlay
          muted
          loop
          playsInline
          className="w-full h-[450px] object-cover"
        />
      </div>

      <Button
        variant="contained"
        href="/demo-wedding-site"
        sx={{
          marginTop: '32px',
          paddingX: '24px',
          paddingY: '12px',
          borderRadius: '30px',
          backgroundColor: '#000',
          color: '#fff',
          fontWeight: 'bold',
          '&:hover': {
            backgroundColor: '#333',
          },
        }}
      >
        Explore a Demo Wedding Site
      </Button>
    </section>
  );
};

export default LiveDemoSection;

if (document.getElementById('livedemo')) {
  const Index = ReactDOM.createRoot(document.getElementById('livedemo'));
  Index.render(
    <React.StrictMode>
      <LiveDemoSection />
    </React.StrictMode>
  );
}
