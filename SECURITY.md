# Department access

All department endpoints require Sanctum authentication. Authenticated users may
read departments; only operator-approved accounts may create, update or delete.
Set `ADMIN_USER_IDS` to a comma-separated list of existing trusted user IDs in
server configuration, then rebuild the configuration cache. Empty configuration
denies all department writes. Never populate this list from registration data,
public email addresses or request parameters.

For browser sessions, configure Sanctum stateful domains and use the normal
login/CSRF flow. External clients use Sanctum bearer tokens. The chart route
requires the same authentication middleware as the dashboard.

Before deployment, review department records for unauthorized changes. Run the
authorization tests against SQLite in memory, never a live database.
