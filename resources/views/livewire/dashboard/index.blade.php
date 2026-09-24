<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenPermit — Dashboard</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }
        .layout {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background: #1e293b;
            color: #e2e8f0;
            padding: 24px 16px;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 24px;
            color: #fff;
        }
        .sidebar nav a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 4px;
            font-size: 14px;
        }
        .sidebar nav a.active,
        .sidebar nav a:hover {
            background: #334155;
            color: #fff;
        }
        .main {
            flex: 1;
            padding: 32px 40px;
        }
        .main header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }
        .main header h1 {
            font-size: 22px;
        }
        .main header .user {
            font-size: 14px;
            color: #64748b;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }
        .stat-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }
        .stat-card .label {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 8px;
        }
        .stat-card .value {
            font-size: 26px;
            font-weight: 600;
        }
        .stat-card .value.pending { color: #d97706; }
        .stat-card .value.approved { color: #16a34a; }
        .stat-card .value.rejected { color: #dc2626; }
        .panel {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }
        .panel h2 {
            font-size: 16px;
            margin-bottom: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th, td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid #eef1f4;
        }
        th {
            color: #64748b;
            font-weight: 500;
            font-size: 13px;
        }
        .badge {
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 500;
        }
        .badge.pending { background: #fef3c7; color: #92400e; }
        .badge.approved { background: #dcfce7; color: #166534; }
        .badge.rejected { background: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <h2>OpenPermit</h2>
            <nav>
                <a href="#" class="active">Dashboard</a>
                <a href="#">Applications</a>
                <a href="#">Permit Types</a>
                <a href="#">Applicants</a>
                <a href="#">Reports</a>
                <a href="#">Settings</a>
            </nav>
        </aside>

        <main class="main">
            <header>
                <h1>Dashboard</h1>
                <div class="user">Signed in as Admin</div>
            </header>

            <section class="stats">
                <div class="stat-card">
                    <div class="label">Total Applications</div>
                    <div class="value">128</div>
                </div>
                <div class="stat-card">
                    <div class="label">Pending Review</div>
                    <div class="value pending">42</div>
                </div>
                <div class="stat-card">
                    <div class="label">Approved</div>
                    <div class="value approved">71</div>
                </div>
                <div class="stat-card">
                    <div class="label">Rejected</div>
                    <div class="value rejected">15</div>
                </div>
            </section>

            <section class="panel">
                <h2>Recent Applications</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Reference #</th>
                            <th>Applicant</th>
                            <th>Permit Type</th>
                            <th>Date Filed</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OP-2026-0091</td>
                            <td>Juan Dela Cruz</td>
                            <td>Building Permit</td>
                            <td>Sep 22, 2026</td>
                            <td><span class="badge pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>OP-2026-0090</td>
                            <td>Maria Santos</td>
                            <td>Business Permit</td>
                            <td>Sep 21, 2026</td>
                            <td><span class="badge approved">Approved</span></td>
                        </tr>
                        <tr>
                            <td>OP-2026-0089</td>
                            <td>Pedro Reyes</td>
                            <td>Electrical Permit</td>
                            <td>Sep 20, 2026</td>
                            <td><span class="badge rejected">Rejected</span></td>
                        </tr>
                        <tr>
                            <td>OP-2026-0088</td>
                            <td>Ana Lim</td>
                            <td>Fencing Permit</td>
                            <td>Sep 19, 2026</td>
                            <td><span class="badge pending">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>