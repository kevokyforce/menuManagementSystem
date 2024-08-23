import React from 'react';
import { Link } from '@inertiajs/react';

export default function Sidebar() {
    return (
        <div className="w-64 bg-blue-800 text-white min-h-screen">
            <div className="p-6">
                <h1 className="text-2xl font-bold">Menu Manager</h1>
                <nav className="mt-6">
                    <Link href="/menus" className="block py-2 px-4 rounded hover:bg-blue-700">
                        Menus
                    </Link>
                    <Link href="/" className="block py-2 px-4 rounded hover:bg-blue-700 mt-4">
                        Home
                    </Link>
                </nav>
            </div>
        </div>
    );
}
