<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //
        $this->call(UKTownsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(AuditsTableSeeder::class);
        $this->call(BoroughsTableSeeder::class);
        $this->call(BoxesTableSeeder::class);
        $this->call(CatStatsTableSeeder::class);
        $this->call(CatStatsWwTableSeeder::class);
        $this->call(ClientGroupsTableSeeder::class);
        $this->call(CmsTableSeeder::class);
        $this->call(Cms2TableSeeder::class);
        $this->call(EmailTemplatesTableSeeder::class);
        $this->call(EnquiriesTableSeeder::class);
        $this->call(HelpTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(MainBoxesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProviderPagesTableSeeder::class);
        $this->call(ProviderPagesJpegTableSeeder::class);
        $this->call(ProviderPagesNewTableSeeder::class);
        $this->call(ProviderPagesSaveTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ProvidersSaveTableSeeder::class);
        $this->call(ProvidersStatesTableSeeder::class);
        $this->call(PublishStatesTableSeeder::class);
        $this->call(SelfHelpCatsTableSeeder::class);
        $this->call(ServiceCatsTableSeeder::class);
        $this->call(ServiceCatsKeywordsTableSeeder::class);
        $this->call(ServiceCatsTextTableSeeder::class);
        $this->call(SpAreasTableSeeder::class);
        $this->call(SpServicesTableSeeder::class);
        $this->call(SpServicesSaveTableSeeder::class);
        $this->call(SpecificCondTableSeeder::class);
        $this->call(StatsMonthlyTableSeeder::class);
        $this->call(SysLogTableSeeder::class);
        $this->call(SysLogEventsTableSeeder::class);
        $this->call(SystemTableSeeder::class);
        $this->call(SystemEventTypesTableSeeder::class);
        $this->call(SystemEventsTableSeeder::class);
        $this->call(SystemSettingsTableSeeder::class);
        $this->call(TempTableSeeder::class);
        $this->call(TrackingTableSeeder::class);
        $this->call(Tracking-oldTableSeeder::class);
        $this->call(UserPagesTableSeeder::class);
        $this->call(UserPagesBkTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersSaveTableSeeder::class);
    }
}