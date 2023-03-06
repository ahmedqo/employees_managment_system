<?php

namespace App\Functions;

class HelpFunction
{
    public static function cities()
    {
        return ['marrakesh', 'fes', 'rabat', 'casablanca', 'chefchaouen', 'tangier', 'meknes', 'agadir', 'essaouira', 'tetouan', 'ouarzazate', 'oujda', 'el jadida', 'salé', 'asilah', 'kenitra', 'safi', 'taroudant', 'larache', 'al hoceima', 'azrou', 'midelt', 'volubilis', 'beni-mellal', 'taza', 'ksar el-kebir', 'province of ouezzane', 'ifran', 'sefrou', 'guercif', 'youssoufia', 'oued zem', 'taourirt', 'tiflet', 'fnideq', 'sidi kacem', 'khemisset', 'tiznit', 'sidi slimane', 'oulad teima', 'tinghir', 'nador', 'martil', 'guelmim', 'settat', 'errachidia', 'khenifra', 'tantan', 'khouribga', 'merzouga', 'mohammedia'];
    }

    public static function states()
    {
        return ['dakhla-oued ed-dahab', 'laâyoune-sakia el hamra', 'guelmim-oued noun', 'souss-massa', 'drâa-tafilalet', 'oriental', 'tanger-tetouan-al hoceima', 'fès-meknès', 'rabat-salé-kénitra', 'béni mellal-khénifra', 'casablanca-settat', 'marrakesh-safi'];
    }

    public static function status()
    {
        return ['pending', 'ready', 'progress', 'closed', 'hold'];
    }

    public static function priorities()
    {
        return ['low', 'medium', 'high', 'critical'];
    }

    public static function reasons()
    {
        return ['other', 'lack of work', 'business closed down', 'end of definite contract', 'end of apprenticeship scheme contract', 'end of work phase', 'expiry of appointment', 'failing to obtain (driving / operating) licence', 'failing to pass physical (training / aptitude) test', 'revocation of employment                                        license', '(cancellation / suspension) of employment licence', 'expiry of employment licence', 'court (injunction / interdiction / sentence)', 'disciplinary reasons', 'failure to perform duties', 'formal resignation', 'did not report for work', 'abandoned place of work', 'early retirement', 'retirement disciplinary corp member', 'retirement age', 'emigrated', 'employed elsewhere', 'ended self-employment', 'further studies', '(transferred / moved) to another department', 'transfer of business', 'change in company name', 'deceased', 'employee reaches pension age', 'health reason'];
    }

    public static function types()
    {
        return ['compassionate', 'long service', 'personal', 'medical', 'annual', 'unpaid', 'other'];
    }

    public static function compensations()
    {
        return ['once', 'hourly', 'daily', 'weekly', 'monthly'];
    }

    public static function grievances()
    {
        return ['benefit denial', 'bullying', 'classification', 'demotion', 'discipline', 'discrimination', 'harassment', 'safety', 'kenitra'];
    }

    public static function statuses()
    {
        return ['pending', 'assessing', 'investigating', 'hearing', 'monitoring', 'settled', 'closed'];
    }

    public static function base($route)
    {
        return request()->routeIs($route) ? 'bg-blue-400 bg-opacity-50' : '';
    }

    public static function sub($route)
    {
        return request()->routeIs($route) ? 'border-blue-400' : 'border-transparent';
    }

    public static function color($priority)
    {
        switch ($priority) {
            case 'critical':
                return 'bg-red-200';
            case 'high':
                return 'bg-yellow-200';
            case 'medium':
                return 'bg-green-200';
            case 'low':
                return 'bg-blue-200';
        }
    }

    public static function n($var)
    {
        switch ($var) {
            case 'poor':
                return 1;
            case 'fair':
                return 2;
            case 'good':
                return 3;
            case 'excellent':
                return 4;
        }
    }
    public static function note($row)
    {
        return HelpFunction::n($row->work) + HelpFunction::n($row->productivity) + HelpFunction::n($row->communication) + HelpFunction::n($row->collaboration) + HelpFunction::n($row->punctuality);
    }
}
