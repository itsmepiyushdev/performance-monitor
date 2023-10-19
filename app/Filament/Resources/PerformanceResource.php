<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerformanceResource\Pages;
use App\Filament\Resources\PerformanceResource\RelationManagers;
use App\Models\Application;
use App\Models\OtherActivity;
use App\Models\Performance;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerformanceResource extends Resource
{
    protected static ?string $model = Performance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Select::make('user_id')
                    ->label('User')
                    ->options(User::all()->pluck('name','id'))
                    ->searchable()
                    ->required(),
                    Select::make('application_id')
                    ->label('Application')
                    ->options(Application::all()->pluck('application_name','id'))
                    ->searchable()
                    ->required()->helperText('Please Provide Name of the Application'),
                    Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->helperText('Description of the work through out the day'),
                    Select::make('other_activity_id')
                    ->label('Other Activity Name')
                    ->options(OtherActivity::all()->pluck('other_activity_name','id'))
                    ->searchable()->helperText('Name of the activity other than application'),
                    DatePicker::make('work_date')
                    ->label('Work Date')
                    ->required()
                    
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->searchable()->sortable(),
                TextColumn::make('application.application_name')->searchable()->sortable(),
                TextColumn::make('description')->searchable()->sortable(),
                TextColumn::make('other_activity.other_activity_name')->searchable()->sortable(),
                TextColumn::make('work_date')->searchable()->sortable(),
            ])->defaultSort('created_at','desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerformances::route('/'),
            'create' => Pages\CreatePerformance::route('/create'),
            'edit' => Pages\EditPerformance::route('/{record}/edit'),
        ];
    }    
}
